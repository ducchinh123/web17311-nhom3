<?php
    
require_once "./dao/pdo.php";
require_once "./dao/sizes.php";


    
    if (isset($_GET['id'])) {
        $codeSIZE = $_GET['id'];
        $info_size =  get_info_sizes($codeSIZE);
        
        extract($info_size);

    }


    if (isset($_POST['id'])) {
        $name = $_POST['name'];
        $product_id = $_POST['product_id'];
        update_sizes($name, $product_id);
        header('location: demo_sizes.php');
    }
?>


<form action="update_sizes.php" method="post">
        <input type="text" name="name" id="" value="<?=$name  ?>">
        <input type="text" name="product_id" id="" value="<?=$product_id  ?>">
        <input type="hidden" name="id" value="<?=$id?>">
        <br>
    <input type="submit" value="Update">
</form>