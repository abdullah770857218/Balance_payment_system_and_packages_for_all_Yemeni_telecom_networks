<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: PUT');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/ManUsers.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate ManUser object
  $ManUser = new ManUsers($db);
  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));//this is for get all data from anyinput

 $ManUser->id   = $data->id;
 $ManUser->name   = $data->name;
 $ManUser->email   = $data->email;
 $ManUser->phone   = $data->phone;
 $ManUser->password   = $data->password;
 $ManUser->status   = $data->status;
 $ManUser->last_login   = $data->last_login;
 $ManUser->token   = $data->token;
 $ManUser->creat_at   = $data->creat_at;
 $ManUser->update_at     = $data->update_at;
 
 
  // Create post
  if($ManUser->update()) {
    echo json_encode(
      array('message' => 'ManUser Updated')
    );
  } else {
    echo json_encode(
      array('message' => 'ManUser Not Update')
    );
  }

