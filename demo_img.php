<?php
    require_once "./dao/pdo.php";
    require_once "./dao/product-img.php";

    
    // thêm

    if (isset($_POST['prod_img'])) {
        
        
        $up_dir = "contents/Images/";
        $upload_file = $up_dir.$_FILES['url']['name'];
        move_uploaded_file($_FILES['url']['tmp_name'], $upload_file);
        $url = $upload_file;

   


        $upload_dir = "contents/Images/";
        $upload_file_2 = $upload_dir.$_FILES['main']['name'];
        move_uploaded_file($_FILES['main']['tmp_name'], $upload_file_2);
        $main = $upload_file_2;


        $product = $_POST['product_id'];

        insert_prod_img($url, $main, $product);
    }


    // Xóa

    if (isset($_GET['id'])) {
        destroy_prod_img($_GET['id']);
    }



    // show
    $ds_img = select_imgAll();


    // var_dump($ds_img);

    foreach ($ds_img as $prod_img) {
        extract($prod_img);
        $delete = "demo_img.php?id=".$id;
        $update = "update_img.php?id=".$id;
        echo '<li><a href="#">'.$url.'</a>  <a href="#">'.$main.'</a>  <a href="#">'.$product_id.'</a>  <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>';
     }



    




?>


<form action="demo_img.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="url" value="<?php if(!empty($url)) echo $url   ?> " id="" placeholder="Link ảnh phụ"> <br> <br>
        <input type="file" name="main" value="<?php if(!empty($main)) echo $main   ?> " id="" placeholder="Link ảnh chính"> <br> <br>
        <input type="text" name="product_id" id="" placeholder="ID Product">
        <br>
        <input type="submit" name="prod_img" value="INSERT">
</form>