<?php

 $hostname = "localhost";
 $dbname = "dethiso8_php";
 $username = "root";
 $password = "";

 try {
    $connect = new PDO("mysql: host=$hostname; dbname=$dbname", $username, $password);
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Kết nối thành công";
 } catch (PDOException $e) {
    echo $e->getMessage();
 }



?>