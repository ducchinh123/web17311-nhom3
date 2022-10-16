<?php

require_once "./dao/pdo.php";
require_once "./dao/product_img.php";

if (isset($_POST['id'])) {
    update_prod_img($_POST['url'], $_POST['main'], $_POST['product_id'], $_POST['id']);
    header('location: demo_img.php');
}

if (isset($_GET['id'])) {
   $ma_prod_img = $_GET['id'];
   $prod_img_info = get_info($ma_prod_img);
   extract($prod_img_info);


}

   

?>

<form action="update_img.php" method="post">
        <input type="text" name="url"  id=""  value="<?=$url ?>"> <br> 
        <input type="text" name="main" id=""  value="<?=$main ?>"><br>
        <input type="text" name="product_id" id="" value="<?=$product_id ?>"> <br>
        <input type="hidden" name="id" value="<?=$id?>"> <br>
        <input type="submit" name="submit" value="Update">
</form>