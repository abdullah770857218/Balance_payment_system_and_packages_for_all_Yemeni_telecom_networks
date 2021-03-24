<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Purches.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $Purche = new Purches($db);

  // Get ID
  $Purche->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get post
  $Purche->read_single();

  // Create array
  $Purche_arr = array(
    'id'                  => $Purche->id,
    'company_id'          => $Purche->company_id,
    'company_name'        => $Purche->company_name,
    'user_id'             => $Purche->user_id,
    'user_name'           => $Purche->user_name,
    'price'               => $Purche->price,
    'creat_at'            => $Purche->creat_at,
    'update_at'           => $Purche->update_at   
  );

  // Make JSON
  print_r(json_encode($Purche_arr));