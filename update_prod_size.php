<?php

require_once "./dao/pdo.php";
require_once "./dao/product_size.php";


// Lấy thông tin

if (isset($_GET['id'])) {
    $code = $_GET['id'];
    $arr_PRODSIZE = get_info_size($code);
    extract($arr_PRODSIZE);
    
}




//Update

if (isset($_POST['id'])) {
    $prod_id = $_POST['product_id'];
    $size_id = $_POST['size_id'];
    $quantity = $_POST['quantity'];

    update($prod_id, $size_id, $quantity);
    header('location: demo_prod_size.php');
 }




    


?>

<form action="update_prod_size.php" method="post">
        <input type="text" name="product_id" value="<?=$product_id ?>"  id=""> <br> <br>
        <input type="text" name="size_id" value="<?=$size_id ?>"  id="" > <br> <br>
        <input type="text" name="quantity" value="<?=$quantity ?>"  id=""> <br> <br>
        <input type="hidden" name="id" id="" > <br> <br>

        <input type="submit" name="prod_size" value="Update">
</form>