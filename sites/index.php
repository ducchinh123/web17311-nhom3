<?php

    require_once "../global.php";

    if (isset($_GET['info-prod'])) {
        $VIEW_NAME="info-prod.php";
     }elseif(isset($_GET['info-cart'])){
         $VIEW_NAME="info-cart.php";
     }elseif(isset($_GET['info-pay'])){
        $VIEW_NAME="info-pay.php";
     }elseif(isset($_GET['order-success'])){
        $VIEW_NAME="order-success.php";
     }
    elseif(isset($_GET['change-pass'])){
        $VIEW_NAME="change-pass.php";
    }elseif(isset($_GET['log-in'])){
        $VIEW_NAME="log-in.php";
    }
    elseif(isset($_GET['sign-in'])){
        $VIEW_NAME="sign-in.php";
    }

     elseif(isset($_GET['search-cate-girl'])){
         $VIEW_NAME="search-cate-girl.php";
     }elseif(isset($_GET['search-cate-boy'])){
         $VIEW_NAME="search-cate-boy.php";
     }elseif(isset($_GET['search-cate-kid'])){
         $VIEW_NAME="search-cate-kid.php";
     }
     else{
         $VIEW_NAME = "home.php";
 
     }

    
    include_once "./layout.php";

?>
