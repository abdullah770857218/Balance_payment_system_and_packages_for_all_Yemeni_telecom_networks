<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
  
  include_once '../config/Database.php';
  require_once "../models/Proccesses.php";
  $database = new Database();
  $db = $database->connect();
  $data = json_decode(file_get_contents("php://input"));//this is for get all data from anyinput

  //--------------for get clients data 
  $url ="http://localhost/proto/api/Clients/Client.php?id=".$data->id."";
  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  $data_clint=json_decode(curl_exec($ch)) ;
  //-------------------------------end 

  //--------------for get company data 
  $url_1 ="http://localhost/proto/api/Companies/Company.php?id=".$data->company_id."";
  $ch_1 = curl_init($url_1);
  curl_setopt($ch_1,CURLOPT_RETURNTRANSFER,true);
  $data_company=json_decode(curl_exec($ch_1)) ;
  //-------------------------------end 

  //--------------for get offer data 
  $url_2 ="http://localhost/proto/api/Offers/Offer.php?id=".$data->offer_id."";
  $ch_2 = curl_init($url_2);
  curl_setopt($ch_2,CURLOPT_RETURNTRANSFER,true);
  $data_offer=json_decode(curl_exec($ch_2)) ;
  //-------------------------------end 


//condition
  
if($data_company->id == 2)
{
  $data_offer->price *= 10;
}

  

if( (($data_clint->balence) > ($data_offer->price))  AND (($data_company->balence) > ($data_offer->price)))
{
  $data_clint->balence -= $data_offer->price; 
  $data_company->balence -= $data_offer->price;
/*
# here can use access token
#  $url_2 ="http://localhost/proto/api/Offers/Offer.php?id=".$data->offer_id."";
# $ch_2 = curl_init($url_2);
#  curl_setopt($ch_2,CURLOPT_RETURNTRANSFER,true);
#  $data_offer=json_decode(curl_exec($ch_2)) ;*/

$Exeit = new Proccesses($db);
$Exeit->company_id     =  $data_company->id ;
$Exeit->client_id      =  $data_clint->id; 
$Exeit->offer_id       =  $data_offer->id; 
$Exeit->phone_customer =  $data->phone_customer;
$Exeit->price          =  $data_offer->price; 
$Exeit->status         =  true;
$Exeit->creat_at       =   date('Y-m-d H:i:s'); 
// if($Exeit->save_db()); 
// {

  
  if(($Exeit->save_db()) AND ($Exeit->update_the_values_client($data_clint->balence)) AND ($Exeit->update_the_values_company($data_company->balence)) )//update for client balance

  {
    
  
    echo json_encode(array('message' => ' تمت العملية رصيدك الان '.$data_clint->balence));
    
  }
  
}
else
{
  
  echo json_encode(array('message' => ' رصيدك غيركافي  '));
}

// }//end condition


  // $Exeit->
  

// }
  // Create post

    // echo json_encode(array('message' => $data));
 
    // echo json_encode(array('message' => 'Client Not Created'));


