<?php
    require_once "./dao/pdo.php";
    require_once "./dao/orders.php";


    // Thêm 
    if (isset($_POST['prod_size'])) {
        insert_orders($_POST['payment_status'], $_POST['customer'], $_POST['sdt'], $_POST['address'], $_POST['date']);
    }

    // Xóa

    if (isset($_GET['id'])) {
        destroy_orders($_GET['id']);
    }

    

    $dsORDER = get_ordersALL();
    // var_dump($dsORDER);

    foreach ($dsORDER as $orders) {
            extract($orders);
            $delete="demo_orders.php?id=".$id;
            $update="update_order.php?id=".$id;
            echo '<li><a href="#">'.$payment_status.'</a>  | <a href="#">'.$customer.'</a> | <a href="#">'.$sdt.'</a> | <a href="#">'.$address.'</a> | <a href="#">'.$create_at.'</a> | <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>';

    }





?>


<form action="demo_orders.php" method="post">
        <input type="text" name="payment_status"  id="" placeholder="Trạng thái thanh toán"> <br> <br>
        <input type="text" name="customer" id="" placeholder="Tên khách hàng"> <br> <br>
        <input type="text" name="sdt" id="" placeholder="SĐT KH"> <br> <br>
        <input type="text" name="address" id="" placeholder="Địa chỉ"> <br> <br>
        <input type="date" name="date" id="" placeholder="Ngày tạo"> <br> <br>
       
        <input type="submit" name="prod_size" value="INSERT">
</form>