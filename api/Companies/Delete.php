<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Companies.php';//fix its with autoloadingfor make once

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $company = new Companies($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  // Set ID to update
  $company->id = $data->id;

  // Delete post
  if($company->delete()) {
    echo json_encode(
      array('message' => 'Company Deleted')
    );
  } else {
    echo json_encode(
      array('message' => 'Company Not Deleted')
    );
  }

