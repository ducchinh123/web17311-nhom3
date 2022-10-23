<?php
    session_start();
    require_once "../global.php";
    require_once "../dao/pdo.php";
   

    if (isset($_GET['info-prod'])) {
        require_once "../dao/pdo.php";
        require_once "../dao/products.php";
        require_once "../dao/product-img.php";

        $info_product = get_product_by_id($_GET['id']);
        $VIEW_NAME="info-prod.php";
     }elseif(isset($_GET['info-cart'])){
        require_once "../dao/pdo.php";
        require_once "../dao/products.php";
        require_once "../dao/product-img.php";

        $info_cart = get_product_by_id($_GET['id']);


         $VIEW_NAME="info-cart.php";
     }elseif(isset($_GET['info-pay'])){
        require_once "../dao/pdo.php";
        require_once "../dao/products.php";
        require_once "../dao/product-img.php";

        $info_cart = get_product_by_id($_GET['id']);



        $VIEW_NAME="info-pay.php";
     }elseif(isset($_GET['order-success'])){
        $VIEW_NAME="order-success.php";
     }
    elseif(isset($_GET['change-pass'])){
        $VIEW_NAME="change-pass.php";
    }elseif(isset($_GET['log-in'])){
        $VIEW_NAME="log-in.php";
    }
    elseif(isset($_GET['post-login'])){
        require_once '../dao/users.php';
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // kiểm tra xem với email nhận đc có tài khoản nào không
        $user = get_one_user_by_email($email);

        // var_dump($user);



        if(count($user) > 0){
            // nếu có thì kiểm tra 2 mật - lưu trong db và mk đc gửi từ form
            // xem có khớp đc với nhau hay không
            if(password_verify($password, $user['password'])){
                // nếu khớp thì tạo session auth để lưu thông tin tài khoản
                $_SESSION['auth'] = [
                    'email' => $user['email'],
                    'name_user' => $user['name_user'],
                    'role_id' => $user['role_id'],
                    'name' => $user['name']
                ];
                header('location: ' . SITE_URL);
                die;
            }
        }
        
    
        header('location: ' . SITE_URL . "?log-in&msg=Tài khoản không chính xác, hãy nhập lại!");
        die;
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
