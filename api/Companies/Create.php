<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Companies.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Client object
  $company = new Companies($db);
  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));//this is for get all data from anyinput
                            
  $company->name     = $data->name;    
  $company->phone  = $data->phone;
  $company->address  = $data->address;
  $company->api_url  = $data->api_url;
  $company->status  = $data->status;
  $company->balence  = $data->balence;
  $company->promotian  = $data->promotian;
  $company->access_token  = $data->access_token;
  $company->creat_at  = date('Y-m-d H:i:s'); 
  $company->update_at  = date('Y-m-d H:i:s'); 

  // Create post
  if($company->create()) {
    echo json_encode(
      array('message' => 'company Created')
    );
  } else {
    echo json_encode(
      array('message' => 'company Not Created')
    );
  }

