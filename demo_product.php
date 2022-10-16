<?php


    require "./dao/pdo.php";
    require "./dao/products.php";


    // Thêm mới

    if (isset($_POST['submit'])) {
        $prod = $_POST['prod'];
        $brand = $_POST['brand'];
        $quan = $_POST['quan'];
        $des = $_POST['des'];
        $price = $_POST['price'];
        insert_prod($prod, $brand, $quan, $des, $price);
    }

    

    
    // Xóa 

    if (isset($_GET['id'])) {
        delete_prod($_GET['id']);
    }



    // Show

    $dsprod = select_prodALL();

    foreach ($dsprod as $prod) {
       extract($prod);
       $delete = "demo_product.php?id=".$id;
       $update = "update_prod.php?id=".$id;
       echo '<li><a href="#">'.$name.'</a> <a href="#">'.$brand.'</a> <a href="#">'.$quantity.'</a>  <a href="#">'.$detail.'</a> <a href="#">'.$price.'</a> <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>';
    }
?>



<form action="demo_product.php" method="post">
        <input type="text" name="prod" id="" placeholder="tên">
        <input type="text" name="brand" id="" placeholder="hiệu">
        <input type="text" name="quan" id="" placeholder="SLg">
        <input type="text" name="des" id="" placeholder="Mô tả">
        <input type="text" name="price" id="" placeholder="Giá">
        
       
        <br>
        <input type="submit" name="submit" value="INSERT">
</form>

