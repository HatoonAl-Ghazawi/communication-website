<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'com_company';
$conndb  = mysqli_connect($server, $username, $password, $database) or mysqli_connect_error($conndb);
if(!$conndb){
    echo'فشل الإتصال بقواعد البيانات!!';
}
// else{
//     echo'نجح الإتصال بقواعد البيانات!!';
// }
?>