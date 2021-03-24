<?php
$url ="http://localhost/proto/api/Companies/Update.php";
$ch = curl_init();
$data= json_encode($_POST);
curl_setopt($ch ,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"PUT");
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type:application/json;charset=utf-8'));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
var_dump($data);
return $result= curl_exec($ch);

?>