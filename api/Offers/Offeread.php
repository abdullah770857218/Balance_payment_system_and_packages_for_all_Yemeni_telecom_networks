<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Offers.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Offers object
  $Offers = new Offers($db);
  $Offers->id = isset($_GET['id']) ? $_GET['id'] : die();
  // Offers query
  $result = $Offers->read_offers();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts #this is for make srue there is data
  if($num > 0) {
    // Post array
    $Offers_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $offer_item = array(
        'id'                  => $id,
        'company_id'          => $company_id,
        'company_name'        => $company_name,
        'Offer_Name'          => $name,
        'price'               => $price,
        'description'         => $description,
        'creat_at'            => $creat_at,
        'update_at'           => $update_at 
        
      );

      // Push to "data"
      array_push($Offers_arr, $offer_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($Offers_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Offer Found')
    );
  }
