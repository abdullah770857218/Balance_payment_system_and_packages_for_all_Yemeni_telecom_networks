<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Clients.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $client = new Clients($db);

  // Get ID
  $client->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get post
  $client->read_single();

  // Create array
  $client_arr = array(
    'id' => $client->id,
    'name' => $client->name,
    'user_name' => $client->user_name,
    'phone' => $client->phone,
    'city' => $client->city,
    'address' => $client->address,
    'password' => $client->password,
    'status' => $client->status,
    'balence' => $client->balence,
    'last_login' => $client->last_login,
    'token' => $client->token,
    'creat_date' => $client->creat_date,
    'last_update' => $client->last_update
  );

  // Make JSON
   print_r(json_encode($client_arr));