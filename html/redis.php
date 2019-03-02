<?php

function array_merge_recursive_distinct(array &$array1, array &$array2)
{
    $merged = $array1;
    foreach ($array2 as $key => &$value) {
        if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
            $merged[$key] = array_merge_recursive_distinct($merged[$key], $value);
        } else {
            $merged[$key] = $value;
        }
    }
    return $merged;
}

$abcd = ['kdf', 'asdf' => 'fgfh','lgk'=>'dfgdgd', "dlklkgds" => ['sd'=>"dfg"] ];
$sbyzd = ['kdfsdsdsdd','lgk'=>'dfgdgd', "dlklkgds" => ['sd'=>"dfgssdssdf"] ];
$result = array_merge_recursive_distinct($abcd, $sbyzd);
//echo "<pre>";print_r($result);echo "</pre>";
//exit();
$res = base64_encode(serialize($result));
   error_reporting(1);
   session_start();
   $_SESSION['abcd'] = "abcd";

   echo "<pre>";print_r(session_get_cookie_params());echo "</pre>";
   try {

      $redis = new Redis();
      $redis->connect('127.0.0.1', 6379); 
      echo "<br> Connection to server sucessfully"; 
      //echo "<pre>";print_r($redis);echo "</pre>";exit();
      //set the data in redis string 
      $redis->set("tutorial-name", $res); 
      // Get the stored data and print it 
      echo "<br> Stored string in redis:: <pre>";print_r( unserialize(base64_decode($redis->get("tutorial-name"))) );echo "</pre>";
    }
    
    //catch exception
    catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
    }

//echo "<pre>";print_r($_SESSION);echo "</pre>";
?>