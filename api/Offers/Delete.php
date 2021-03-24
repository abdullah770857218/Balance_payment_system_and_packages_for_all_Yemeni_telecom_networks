<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Offers.php';//fix its with autoloadingfor make once

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $Offer = new Offers($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  // Set ID to update
  $Offer->id = $data->id;

  // Delete post
  if($Offer->delete()) {
    echo json_encode(
      array('message' => 'Offer Deleted')
    );
  } else {
    echo json_encode(
      array('message' => 'Offer Not Deleted')
    );
  }

