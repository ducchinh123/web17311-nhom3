<?php

require_once "./dao/pdo.php";
require_once "./dao/orders.php";


    // Lấy thông tin


    if (isset($_GET['id'])) {
       $code = $_GET['id'];
       $info = get_info_order($code);
       extract($info);
    }

     // update

     if (isset($_POST['id'])) {
        update_order($_POST['payment_status'], $_POST['customer'], $_POST['sdt'], $_POST['address'], $_POST['date'], $_POST['id']);
        header('location: demo_orders.php');
     }

?>

<form action="update_order.php" method="post">
        <input type="text" name="payment_status"  id="" value="<?=$payment_status?>"> <br> <br>
        <input type="text" name="customer" id="" value="<?=$customer?>"> <br> <br>
        <input type="text" name="sdt" id="" value="<?=$sdt?>"> <br> <br>
        <input type="text" name="address" id="" value="<?=$address?>"> <br> <br>
        <input type="date" name="date" id="" value="<?=$create_at?>"> <br> <br>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="prod_size" value="Update">
</form>
