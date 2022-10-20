<?php

require_once "../dao/pdo.php";
require_once "../dao/categories.php";

     // Xóa dữ liệu

     if (isset($_GET['id'])) {
        delete_cate($_GET['id']);
 }

   //  header('location: list-cate.php');



?>