<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../config/Database.php';
  include_once '../models/Proccesses.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Offers object
  $proccesses = new Proccesses($db);
  $proccesses->client_phone = isset($_GET['client_phone']) ? $_GET['client_phone'] : die();
  // Offers query
  // var_dump($proccesses->client_phone);
  $result = $proccesses->read_single();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts #this is for make srue there is data
  if($num > 0) {
    // Post array
    $proccesses_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $proccesses_item = array(
        'id'        => $id,
        'offer_name'        => $offer_name,
        'company_name'        => $company_name,
        'client_phone'        => $client_phone,
        'price'        => $price,
        'phone_customer'        => $phone_customer,
        'creat_at'        => $creat_at,
        'status'        => $status        
        
      );

      // Push to "data"
      array_push($proccesses_arr, $proccesses_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($proccesses_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No proccesses Found')
    );
  }
