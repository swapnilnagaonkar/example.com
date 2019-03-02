<?php

/* $called = explode('/', trim($_SERVER['PATH_INFO'],'\x20\x2f'));

echo "<pre>";print_r($called);echo "</pre>";
exit();
 */

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
header('x-error : abcd');
$aArray = [];

$aArray = ['Radha Gopinath' => ['Congregation devotee'], 'Radha Madan Mohan', 'Radha Ras Bihari', 'Radha Giri Dhari'];

//echo "<pre>";print_r($aArray);echo "</pre>";
//$req_body = json_decode(file_get_contents('php://input'),true);
//echo "<pre>";print_r($req_body);echo "</pre>";

echo json_encode($aArray, true);
?>