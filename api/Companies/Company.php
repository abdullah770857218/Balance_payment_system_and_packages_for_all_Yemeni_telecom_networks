<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Companies.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $company = new Companies($db);

  // Get ID
  $company->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get post
  $company->read_single();

  // Create array
  $company_arr = array(
    'id'         => $company->id,
    'name'       => $company->name,
    'phone'      => $company->phone,
    'address'    => $company->address,
    'api_url'    => $company->api_url,
    'status'     => $company->status,
    'balence'    => $company->balence,
    'promotian'  => $company->promotian,
    'token'      => $company->access_token,
    'creat_at'   => $company->creat_at,
    'update_at'  => $company->update_at
  );

  // Make JSON
  print_r(json_encode($company_arr));