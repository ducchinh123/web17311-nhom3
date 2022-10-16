<?php

require_once "./dao/pdo.php";
require_once "./dao/order_detail.php";

    //  Hiển thị thông tin

    if (isset($_GET['id'])) {
        $code = $_GET['id'];
        $arr = get_info_detail($code);
        extract($arr);
    }


    // update

    if (isset($_POST['id'])) {
       update_detail($_POST['size'], $_POST['quan'], $_POST['price'], $_POST['order'], $_POST['prod'], $_POST['id']);
       header('location: demo_order_detail.php');
    }


?>

<form action="update_order_detail.php" method="post">
        <input type="text" name="size" id="" value="<?=$size_id?>"> <br> <br>
        <input type="text" name="quan" id="" value="<?=$quantity?>"> <br> <br>
        <input type="text" name="price" id="" value="<?=$unit_price?>"> <br> <br>
        <input type="text" name="order" id="" value="<?=$order_id?>"> <br> <br>
        <input type="text" name="prod" id="" value="<?=$product_id?>"> <br> <br>

        <input type="hidden" name="id" value="<?=$id?>">

        <input type="submit" name="submit" id="" value="Update"> <br> <br>

</form>