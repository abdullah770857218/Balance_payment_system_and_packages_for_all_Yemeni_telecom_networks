<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Offers.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $Offer = new Offers($db);

  // Get ID
  $Offer->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get post
  $Offer->read_single();

  // Create array
  $Offer_arr = array(
    'id'                  => $Offer->id,
    'company_id'          => $Offer->company_id,
    'company_name'        => $Offer->company_name,
    'Offer_Name'          => $Offer->name,
    'price'               => $Offer->price,
    'description'         => $Offer->description,
    'creat_at'            => $Offer->creat_at,
    'update_at'           => $Offer->update_at   
  );

  // Make JSON
  print_r(json_encode($Offer_arr));