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
  $client->phone = isset($_GET['phone']) ? $_GET['phone'] : die();
  

  // Get post
  $client->read_single_log();

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
    'last_update' => $client->last_update,
    'activety' => $client->activety
  );
// if(($client_arr->name)!==null){

  print_r(json_encode($client_arr)) ;

// }
  // Make JSON