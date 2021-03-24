<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Clients.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Client object
  $client = new Clients($db);
  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));//this is for get all data from anyinput


 $client->user_id= $data->user_id;
 $client->name= $data->name;
 $client->phone= $data->phone;
 $client->city= $data->city;
 $client->address= $data->address;
 $client->password= $data->password;
 $client->status= $data->status;
 $client->balence= $data->balence;
 $client->last_login= $data->last_login;
 $client->token= $data->token;
 $client->activety= $data->activety;
 $client->creat_date= date('Y-m-d H:i:s');
 $client->last_update= $data->last_update;

  // Create post
  if($client->create()) {
    echo json_encode(
      array('message' => 'Client Created')
    );
  } else {
    echo json_encode(
      array('message' => 'Client Not Created')
    );
  }

