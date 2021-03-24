<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Purches.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Purche object
  $Purche = new Purches($db);
  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));//this is for get all data from anyinput

 $Purche->company_id          = $data->company_id;
 $Purche->user_id             = $data->user_id;
 $Purche->price               = $data->price;
 $Purche->creat_at            = $data->creat_at;
 $Purche->update_at           = $data->update_at;
 

  // Create post
  if($Purche->create()) {
    echo json_encode(
      array('message' => 'Purche Created')
    );
  } else {
    echo json_encode(
      array('message' => 'Purche Not Created')
    );
  }

