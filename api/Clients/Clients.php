<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Clients.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Clients object
  $clients = new Clients($db);

  // Clients query
  $result = $clients->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts #this is for make srue there is data
  if($num > 0) {
    // Post array
    $clients_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $client_item = array(
        'id' => $id,
        'name' => $name,
        'user_name' => $user_name,
        'phone' => $phone,
        'city' => $city,
        'address' => $address,
        'password' => $password,
        'status' => $status,
        'balence' => $balence,
        'last_login' => $last_login,
        'token' => $token,
        'creat_date' => $creat_date,
        'last_update' => $last_update,
        'user_id' => $user_id
      );

      // Push to "data"
      array_push($clients_arr, $client_item);
      // array_push($posts_arr['data'], $post_item);
    }
    // Turn to JSON & output
    // $clients_arr = 
    // var_dump($client_item);
    print_r (json_encode($clients_arr)) ;

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Client Found')
    );
  }
