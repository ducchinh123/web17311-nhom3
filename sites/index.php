<?php

    require_once "../global.php";
    require_once "../dao/pdo.php";
   

    if (isset($_GET['info-prod'])) {
        require_once "../dao/pdo.php";
        require_once "../dao/products.php";
        require_once "../dao/product-img.php";

        $info_product = get_products_by_cate_ids($_GET['id']);
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

        
        
        
        require_once "../dao/categories.php";
        require_once "../dao/products.php";
        $list_categories_new = get_all_categories([]); 
        $list_products_new = get_products_by_cate_ids([]); 

       
        $VIEW_NAME = "home-hq.php";

     


        
 
     }

    
    include_once "./layout.php";

?>
