<?php

    require_once "../dao/pdo.php";
    require_once "../dao/categories.php";
    

 
    // Sửa 

    // bước 1: Lấy thông tin
    
    if (isset($_GET['id'])) {
        $codeCATE = $_GET['id'];
        $info_cate = get_info_2($codeCATE);
        extract($info_cate);
        
    }

    // bước 2: tiến hành sửa
    if (isset($_POST['id'])) {
        update_cate($_POST['id'] ,$_POST['name_cate']);
        header('location: http://localhost/web17311-nhom3/admin/?list-cate');
    }

    
     

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../contents/css/style-admin.css">
    <title>Trang quản trị danh mục</title>
</head>
<body>
    <div class="main">
    <header><center><h1>Đây là trang quản trị danh mục của P-SHOP</h1></center></header>

    <div class="product">


        
        <div class="update_cate">
          <h1>Sửa danh mục</h1>
            <hr>
            <form action="<?=ADMIN_URL?>admin-cate/update-cate.php" method="post">
                
             
                <h3>Tên danh mục</h3> 
                <input type="text" class="input_form" name="name_cate" value="<?=$name?>" id=""> <br>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="inser_cate" class="input_form_2" value="Sửa nó">
    
            </form>
        </div>

        
        
    </div>
    
</div>

</body>
</html>