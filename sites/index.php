<?php

    require_once "../global.php";


    if (isset($_GET['info-prod'])) {
       $VIEW_NAME="info-prod.php";
    }elseif(isset($_GET['info-cart'])){
        $VIEW_NAME="info-cart.php";
    }elseif(isset($_GET['search-cate'])){
        $VIEW_NAME="search-cate.php";
    }elseif(isset($_GET['search-cate-for-boy'])){
        $VIEW_NAME="search-cate-for-boy.php";
    }elseif(isset($_GET['search-cate-for-kid'])){
        $VIEW_NAME="search-cate-for-kid.php";
    }
    else{
        $VIEW_NAME = "home.php";

    }

    
    include_once "./layout.php";

?>