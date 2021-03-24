<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
  
  
  $data = json_decode(file_get_contents("php://input"));//this is for get all data from anyinput
  
  $url ="http://localhost/proto/api/Clients/login.php?phone=".$data->username."";
  $ch = curl_init($url);
  
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  $result=json_decode(curl_exec($ch)) ;
  // var_dump($db);
//   base64_encode(); here make it encode for pass info 
  if(($data->pass ==$result->password)&&($data->username == $result->phone)&&($result->activety ==1)){
       session_start();
       $_SESSION['id']=$result->id;
       $_SESSION['phone']=$result->phone;
       $_SESSION['name']=$result->name;
       $_SESSION['balence']=$result->balence;
       session_write_close();
       echo json_encode(array('message' => '  مرحبا    '.$result->name));


}else
{

  echo json_encode(array('message' => '  اسم المستخدم او كلمة السر خاطئه او قد تكون خاملاً    '));
}
  // Create post

    // echo json_encode(array('message' => $data));
 
    // echo json_encode(array('message' => 'Client Not Created'));


