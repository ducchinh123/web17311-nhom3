<?php

require_once "./dao/pdo.php";
require_once "./dao/sizes.php";

    


    // Insert

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $prod_id = $_POST['product_id'];
        insert_sizes($name, $prod_id);
    }

    // Xóa

    if (isset($_GET['id'])) {
        destroy_sizes($_GET['id']);
    }

        // Show

    $ds_sizes = select_sizesALL();

    foreach ($ds_sizes as $sizes) {
        extract($sizes);
        $delete = "demo_sizes.php?id=".$id;
        $update = "update_sizes.php?id=".$id;

        echo '<li><a href="#">'.$name.'</a> <a href="#">'.$product_id.'</a>   <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>';
    }



  

?>


<form action="demo_sizes.php" method="post">
        <input type="text" name="name" placeholder="Tên size">
        <br> <br>
        <input type="text" name="product_id" placeholder="Product_id">
        <br> <br>
        <input type="submit" name="submit" value="INSERT">
</form>
