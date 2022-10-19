<?php

    require_once "../dao/pdo.php";
    require_once "../dao/product-img.php";
    
    // biến chứa tất cả dữ liệu
    $dsIMG = select_imgAll();

    // var_dump($dsIMG);


    // Thêm dữ liệu

    if (isset($_POST['insert'])) {

        $path_2 = "Images/product/";
        $name_image_2 = $path_2.$_FILES['url1']['name'];  
        move_uploaded_file($_FILES['url1']['tmp_name'], $name_image_2);
        $url = $name_image_2;
        
        $path = "Images/product/";
        $name_image = $path.$_FILES['main']['name'];  
        move_uploaded_file($_FILES['main']['tmp_name'], $name_image);
        $main = $name_image;


        
        $product = $_POST['product_id'];

        $path_3 = "Images/product/";
        $name_image_3 = $path_3.$_FILES['url2']['name'];
        move_uploaded_file($_FILES['url2']['tmp_name'], $name_image_3);
        $url_2 = $name_image_3;


        $path_4 = "Images/product/";
        $name_image_4 = $path_4.$_FILES['url3']['name'];
        move_uploaded_file($_FILES['url3']['tmp_name'], $name_image_4);
        $url_3 = $name_image_4;


        


        insert_prod_img($url, $main, $product, $url_2, $url_3);


    }


    // Xóa

    if (isset($_GET['id'])) {
        destroy_prod_img($_GET['id']);
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
            
               <h1>Thêm sản phẩm</h1>
            <hr>
            <form  action="list-img.php" method="POST" enctype="multipart/form-data">
                
           
                
                <h3>Id product</h3> 
                <input type="text" class="input_form" name="product_id" id=""> <br>
              
                <h3>Ảnh chính</h3> 
                <input type="file" class="input_img" name="main" id=""> <br>

                <h3>Ảnh phụ 1</h3> 
                <input type="file" class="input_img" name="url1" id=""> <br>

                <h3>Ảnh phụ 2</h3> 
                <input type="file" class="input_img" name="url2" id=""> <br>


                <h3>Ảnh phụ 3</h3> 
                <input type="file" class="input_img" name="url3" id=""> <br>

            
                
                <input type="submit" name="insert" class="input_form_2" value="Thêm vào">


    
            </form>
            
            
            
        </div>
        <div class="product-right_3">
            <table border="1" style="width:100%">
                <tr>
                    <th>Id</th>
                    <th>Ảnh chính</th>
                    <th>Ảnh phụ 1</th>
                    <th>Ảnh phụ 2</th>
                    <th>Ảnh phụ 3</th>
                    <th>Quản lí</th>
                </tr>

                <?php
                    foreach ($dsIMG as $item) {
                        
                    
            ?>
                
                <tr>
                    <td><?php echo $item['id']  ?></td>
                    <td><img src="<?=CONTENT_URL?><?php echo $item['main']  ?>" style="width: 180px; height: 100px;" alt=""></td>
                    <td><img src="<?=CONTENT_URL?><?php echo $item['url']  ?>" style="width: 180px; height: 100px;" alt=""></td>
                    <td><img src="<?=CONTENT_URL?><?php echo $item['url_2']  ?>" style="width: 180px; height: 100px;" alt=""></td>
                    <td><img src="<?=CONTENT_URL?><?php echo $item['url_3']  ?>" style="width: 180px; height: 100px;" alt=""> </td>
                    
                    <td><a href="list-img.php?id=<?php echo $item['id'] ?>" style="text-decoration: none;">Xóa</a> | <a href="" style="text-decoration: none;">Sửa</a>
                </td>

                    <?php
                    }
            ?>

            </table>
        </div>
    </div>
    
</div>

</body>
</html>