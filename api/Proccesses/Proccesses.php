<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Proccesses.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Proccesses object
  $Proccesses = new Proccesses($db);

  // Proccesses query
  $result = $Proccesses->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts #this is for make srue there is data
  if($num > 0) {
    // Post array
    $Proccesses_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $Proccess_item = array(
        'id'                  => $id,
        'offer_id'          => $offer_id,
        'offer_name'        => $offer_name,
        'client_id'             => $client_id,
        'client_name'           => $client_name,
        'company_id'             => $company_id,
        'company_name'           => $company_name,
        'client_phone'           => $client_phone,
        'phone_customer'               => $phone_customer,
        'status'            => $status,
        'creat_at'           => $creat_at,
        'price'           => $price

        
      );

      // Push to "data"
      array_push($Proccesses_arr, $Proccess_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($Proccesses_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Proccesses Found')
    );
  }
