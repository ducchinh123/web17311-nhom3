<?php

    require_once "../dao/pdo.php";
    require_once "../dao/product-img.php";
    require_once "../dao/products.php";
 

   // lấy thông tin
   if (isset($_GET['id'])) {
    $codePRO = $_GET['id'];
    $infoPRO = get_info($codePRO);
    extract($infoPRO);
}



// Bắt đầu sửa

    if (isset($_POST['id'])) {
        update_prod_img('images/'.$_FILES['url']['name'], 'images/'.$_FILES['main']['name'], 'images/'.$_FILES['url_2']['name'], 'images/'.$_FILES['url_3']['name'], $_POST['id']);
        header('location: http://localhost/web17311-nhom3/admin/?list-img');
    }
      


        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../contents/css/style-admin.css">
    <title>Trang quản trị ảnh sản phẩm</title>
</head>
<body>
    <div class="main">
    <header><center><h1>Đây là trang quản trị ảnh sản phẩm của P-SHOP</h1></center></header>

    <div class="product">


        <div class="product-left_3">
            
               <h1>Sửa ảnh sản phẩm</h1>
            <hr>
            <form  action="<?=ADMIN_URL?>admin-img/update-img.php" method="POST" enctype="multipart/form-data">
                
           
                
                <h3>Id product</h3> 
                                                                
                <input type="text" class="input_form" name="product_id" value="<?=$product_id ?>" id="" disabled> <br>
                                                                            
                <h3>Ảnh chính</h3> 
                <input type="file" class="input_img" name="main"  value="<?=$main ?>" id=""> <br>

                <h3>Ảnh phụ 1</h3> 
                <input type="file" class="input_img" name="url" value="<?=$url ?>" id=""> <br>

                <h3>Ảnh phụ 2</h3> 
                <input type="file" class="input_img" name="url_2" value="<?=$url_2 ?>" id=""> <br>


                <h3>Ảnh phụ 3</h3> 
                <input type="file" class="input_img" name="url_3" value="<?=$url_3 ?>" id=""> <br>

               
                <input type="hidden" class="input_img" name="id" value="<?=$id ?>" id=""> <br>

            
                
                <input type="submit" name="insert" class="input_form_2" value="Sửa nó"><br><br>
                <h5 style="margin-left: 80px; margin-top: -20px;  padding: 10px 10px; background-color: #FF4500;  width: 100px;">  
                 <a href="http://localhost/web17311-nhom3/admin/?list-img" style="color: white; text-decoration: none; text-align: center; margin-left: 25px;" >  Trở lại</a></h5>


    
            </form>
            
            
            
        </div>
        
    </div>
    
</div>
                    
                   
</body>
</html>