<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Clients.php';//fix its with autoloadingfor make once

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $client = new Clients($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  // Set ID to update
  $client->id = $data->id;

  // Delete post
  if($client->delete()) {
    echo json_encode(
      array('message' => 'Client Deleted')
    );
  } else {
    echo json_encode(
      array('message' => 'Client Not Deleted')
    );
  }

