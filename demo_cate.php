<?php

    require "dao/pdo.php";
    require "dao/categories.php";


    // Thêm mới

    if (isset($_POST['cate'])) {
        $name = $_POST['cate'];
        insert_cate($name);
    }
    
    // Xóa 

    if (isset($_GET['id'])) {
        delete_cate($_GET['id']);
    }



    // Show

    $dscate = select_cateALL();

    // var_dump($dscate);

    foreach ($dscate as $cate) {
       extract($cate);
       $delete = "demo_cate.php?id=".$id;
       $update = "update_cate.php?id=".$id;
       echo '<li><a href="#">'.$name.'</a>  <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>';
    }
?>



<form action="demo_cate.php" method="post">
        <input type="text" name="cate" id="">
        <br>
        <input type="submit" value="INSERT">
</form>