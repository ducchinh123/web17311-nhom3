<?php
    require_once "../global.php";
    if (isset($_GET['list'])) {
        $VIEW_NAME = "admin-prod/list.php";
    }elseif(isset($_GET['update-list'])){
        $VIEW_NAME = "admin-prod/update-list.php";
    }
    elseif(isset($_GET['list-cate'])){
        $VIEW_NAME = "admin-cate/list-cate.php";
    }elseif(isset($_GET['update-cate'])){
        $VIEW_NAME = "admin-cate/update-cate.php";
    }
    elseif(isset($_GET['list-cate-update'])){
        $VIEW_NAME = "admin-cate/list-cate-update.php";
    }elseif(isset($_GET['list-img'])){
        $VIEW_NAME = "admin-img/list-img.php";
    }elseif(isset($_GET['update-img'])){
        $VIEW_NAME = "admin-img/update-img.php";
    }   
    elseif(isset($_GET['list-user'])){
        $VIEW_NAME = "admin-user/list-user.php";
    }elseif(isset($_GET['update-user'])){
        $VIEW_NAME = "admin-user/update-user.php";
    }
    
    
    else{
        $VIEW_NAME = "dashboard/home.php";
    }

    include_once "./layout.php";
?>