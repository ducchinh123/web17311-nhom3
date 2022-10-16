<?php

    require "dao/pdo.php";
    require "dao/categories.php";

    if (isset($_POST['id'])) {
        update_cate($_POST['id'], $_POST['name']);
        header('location: demo_cate.php');
    }

    if (isset($_GET['id'])) {
       $maloai = $_GET['id'];
       $cate_info = get_info($maloai);
       extract($cate_info);

       
    


?>

<form action="update_cate.php" method="post">
        <input type="text" name="name"  value="<?=$name?>">
        <br>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="Update">
</form>

<?php
    }else{


        echo "Mã loại không tồn tại";

    }
?>