<?php

    require_once "./dao/pdo.php";
    require_once "./dao/order_detail.php";

    // thêm
    if (isset($_POST['submit'])) {
        insert_order_detail($_POST['size'], $_POST['quan'], $_POST['price'], $_POST['order'], $_POST['prod']);
    }

    // Xóa

    if (isset($_GET['id'])) {
       destroy_order_detail($_GET['id']);
    }
    
    // show

    $dsORDERDETAIL = get_allORDER();
    // var_dump($dsORDERDETAIL);

    foreach ($dsORDERDETAIL as $orderdetail) {
        extract($orderdetail);
        $delete= "demo_order_detail.php?id=".$id;
        $update= "update_order_detail.php?id=".$id;
        echo '<li><a href="#">'.$size_id.'</a>  | <a href="#">'.$quantity.'</a> | <a href="#">'.$unit_price.'</a> | <a href="#">'.$order_id.'</a> | <a href="#">'.$product_id.'</a> | <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>';
 
    }


?>

<form action="demo_order_detail.php" method="post">
        <input type="text" name="size" id="" placeholder="ID SIZE"> <br> <br>
        <input type="text" name="quan" id="" placeholder="Quantity"> <br> <br>
        <input type="text" name="price" id="" placeholder="Unit price"> <br> <br>
        <input type="text" name="order" id="" placeholder="ID order"> <br> <br>
        <input type="text" name="prod" id="" placeholder="ID product"> <br> <br>

        <input type="submit" name="submit" id=""> <br> <br>

</form>