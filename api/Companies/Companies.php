<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Companies.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate companies object
  $companies = new Companies($db);

  // companies query
  $result = $companies->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts #this is for make srue there is data
  if($num > 0) {
    // Post array
    $companies_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $company_item = array(
        'id' => $id,
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'api_url' => $api_url,
        'status' => $status,
        'balence' => $balence,
        'promotian' => $promotian,
        'access_token' => $access_token,
        'creat_at' => $creat_at,
        'update_at' => $update_at
      );
    

      // Push to "data"
      array_push($companies_arr, $company_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output

    echo (json_encode($companies_arr));

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Client Found')
    );
  }
