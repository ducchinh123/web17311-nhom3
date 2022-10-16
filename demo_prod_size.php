<?php

    require_once "./dao/pdo.php";
    require_once "./dao/product_size.php";


    

    // insert

    if (isset($_POST['prod_size'])) {
       $prod_id = $_POST['product_id'];
       $size_id = $_POST['size_id'];
       $quantity = $_POST['quantity'];

       insert_prod_size($prod_id, $size_id, $quantity);
      

    }

    // Xóa

    if (isset($_GET['id'])) {
        destroy_prod_size($_GET['id']);
    }

   
    

    






    // Show

    $ds_prod_size = select_product_size_ALL();

    // var_dump($ds_prod_size);


    foreach ($ds_prod_size as $prodSIZE) {
       extract($prodSIZE);
       $delete = "demo_prod_size.php?id=".$product_id;
       $update = "update_prod_size.php?id=".$product_id;
       echo '<li><a href="#">'.$product_id.'</a> <a href="#">'.$size_id.'</a> <a href="#">'.$quantity.'</a>  <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>';
    }




?>


<form action="demo_prod_size.php" method="post">
        <input type="text" name="product_id"  id="" placeholder="ID của product"> <br> <br>
        <input type="text" name="size_id" id="" placeholder="ID của Size"> <br> <br>
        <input type="text" name="quantity" id="" placeholder="số lượng Size"> <br> <br>
        <input type="submit" name="prod_size" value="INSERT">
</form>