<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/ManUsers.php';//fix its with autoloadingfor make once

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $manuser = new ManUsers($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  // Set ID to update
  $manuser->id = $data->id;

  // Delete post
  if($manuser->delete()) {
    echo json_encode(
      array('message' => 'manuser Deleted')
    );
  } else {
    echo json_encode(
      array('message' => 'manuser Not Deleted')
    );
  }
