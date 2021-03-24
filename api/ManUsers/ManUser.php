<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/ManUsers.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $ManUser = new ManUsers($db);

  // Get ID
  $ManUser->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get post
  $ManUser->read_single();

  // Create array
  $ManUser_arr = array(
    'id'            => $ManUser->id,
    'name'          => $ManUser->name,
    'email'         => $ManUser->email,
    'phone'         => $ManUser->phone,
    'password'      => $ManUser->password,
    'status'        => $ManUser->status,
    'last_login'    => $ManUser->last_login,
    'token'         => $ManUser->token,
    'creat_at'      => $ManUser->creat_at,
    'update_at'     => $ManUser->update_at   
  );

  // Make JSON
  print_r(json_encode($ManUser_arr));