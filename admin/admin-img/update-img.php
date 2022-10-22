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

      if (isset($_POST['insert'])) {


        $upload_dir2 = "images/"; 
        $upload_file2 = $upload_dir2.$_FILES['url']['name'];
        move_uploaded_file($_FILES['url']['tmp_name'], $upload_file2);
        $url = $upload_file2;
        

        
        $upload_dir1 = "images/";
        $upload_file1 = $upload_dir1.$_FILES['main']['name'];
        move_uploaded_file($_FILES['main']['tmp_name'], $upload_file1);
        $main = $upload_file1;


        $product = $_POST['product_id'];



        $upload_dir3 = "images/";
        $upload_file3 = $upload_dir3.$_FILES['url_2']['name'];
        move_uploaded_file($_FILES['url_2']['tmp_name'], $upload_file3);
        $url_2 = $upload_file3;



        $upload_dir4 = "images/";
        $upload_file4 = $upload_dir4.$_FILES['url_3']['name']; 
        move_uploaded_file($_FILES['url_3']['tmp_name'], $upload_file4);
        $url_3 = $upload_file4;




        
    //     function insert_prod_img($url, $main, $product, $url_2, $url_3){
    //         $sql= "insert into product_img(url, main, product_id, url_2, url_3) values(?,?,?,?,?)";
    //         pdo_execute($sql, $url, $main, $product, $url_2, $url_3);
    //    }


        insert_prod_img($url, $main, $product, $url_2, $url_3);
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