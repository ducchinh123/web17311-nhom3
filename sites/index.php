<?php

    require_once "../global.php";


    if (isset($_GET['prod'])) {
       $VIEW_NAME="prod.php";
    }elseif(isset($_GET['cart'])){
        $VIEW_NAME="cart.php";
    }elseif(isset($_GET['search-cate'])){
        $VIEW_NAME="search-cate.php";
    }elseif(isset($_GET['search-cate-for-boy'])){
        $VIEW_NAME="search-cate-for-boy.php";
    }elseif(isset($_GET['search-cate-for-kid'])){
        $VIEW_NAME="search-cate-for-kid.php";
    }
    else{
        $VIEW_NAME = "pay.php";

    }

    
    include_once "./layout.php";

?>