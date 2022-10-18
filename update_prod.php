<?php

require "./dao/pdo.php";
require "./dao/products.php";

if (isset($_POST['id'])) {
    update_prod($_POST['id'], $_POST['prod'], $_POST['brand'], $_POST['quan'], $_POST['des'], $_POST['price']);
    header('location: demo_product.php');
}




if (isset($_GET['id'])) {
   $masp = $_GET['id'];
   $prod_info = get_info_prod($masp);
   extract($prod_info);

}

   

?>

<form action="update_prod.php" method="post">
        <input type="text" name="prod" id="" value="<?=$name  ?>">
        <input type="text" name="brand" id="" value="<?=$brand  ?>">
        <input type="text" name="quan" id="" value="<?=$quantity  ?>">
        <input type="text" name="des" id="" value="<?=$detail  ?>">
        <input type="text" name="price" id="" value="<?=$price  ?>">
        <input type="hidden" name="id" value="<?=$id?>">
        <br>
    <input type="submit" value="Update">
</form>