<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Purches.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Purches object
  $Purches = new Purches($db);

  // Purches query
  $result = $Purches->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts #this is for make srue there is data
  if($num > 0) {
    // Post array
    $Purches_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $purche_item = array(
        'id'                  => $id,
        'company_id'          => $company_id,
        'company_name'        => $company_name,
        'user_id'             => $user_id,
        'user_name'           => $user_name,
        'price'               => $price,
        'creat_at'            => $creat_at,
        'update_at'           => $update_at

        
      );

      // Push to "data"
      array_push($Purches_arr, $purche_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($Purches_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Offer Found')
    );
  }
