<?php

    require_once "../global.php";


    if (isset($_GET['prod'])) {
       $VIEW_NAME="prod.php";
    }elseif(isset($_GET['cart'])){
        $VIEW_NAME="cart.php";
    }else{
        $VIEW_NAME = "pay.php";

    }

    
    include_once "./layout.php";

?>