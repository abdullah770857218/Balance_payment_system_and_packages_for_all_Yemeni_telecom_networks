<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Offers.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Offer object
  $Offer = new Offers($db);
  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));//this is for get all data from anyinput

 $Offer->company_id          = $data->company_id;
 $Offer->name                = $data->name;
 $Offer->price               = $data->price;
 $Offer->description         = $data->description;
 $Offer->creat_at            = $data->creat_at;
 $Offer->update_at           = date('Y-m-d H:i:s'); 
 

  // Create post
  if($Offer->create()) {
    echo json_encode(
      array('message' => 'Offer Created')
    );
  } else {
    echo json_encode(
      array('message' => 'Offer Not Created')
    );
  }

