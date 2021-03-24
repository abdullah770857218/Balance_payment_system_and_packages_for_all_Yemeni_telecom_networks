<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/ManUsers.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate ManUsers object
  $ManUsers = new ManUsers($db);

  // ManUsers query
  $result = $ManUsers->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts #this is for make srue there is data
  if($num > 0) {
    // Post array
    $ManUsers_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $user_item = array(
        'id'            => $id,
        'name'          => $name,
        'email'         => $email,
        'phone'         => $phone,
        'password'      => $password,
        'status'        => $status,
        'last_login'    => $last_login,
        'token'         => $token,
        'creat_at'      => $creat_at,
        'update_at'     => $update_at      
        
      );

      // Push to "data"
      array_push($ManUsers_arr, $user_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($ManUsers_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Client Found')
    );
  }
