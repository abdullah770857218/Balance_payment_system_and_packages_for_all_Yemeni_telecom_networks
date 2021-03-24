<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Companies.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$company = new Companies($db);

// Get ID
$company->id = isset($_GET['id']) ? $_GET['id'] : die();

// Get post
$company->balances();

// Create array
$company_arr = array(
  'id'         => $company->id,
  'name'       => $company->name,
  'balence'    => $company->balence,

);

// Make JSON
print_r(json_encode($company_arr));


?>