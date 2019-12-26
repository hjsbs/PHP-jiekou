<?php
/*    以下均未进行注入过滤，自行修改    */
$option = $_GET['option']; //操作
$key = $_GET['key']; //认证key
if($key != '123')    die('Key认证失败'); //此处可以换成数据库检索或者数组检索
if($option == 'return'){
    echo    json_encode(array('error'=>0,'message'=>'Ok')); //输出JSON
} //继续其他操作
?>
