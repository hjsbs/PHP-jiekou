<?php
$option = $_GET['option'];
$key = $_GET['key'];
if($key != '123')    die('Key认证失败'); 
if($option == 'return'){
    echo    json_encode(array('error'=>0,'message'=>'Ok')); 
} 
?>
