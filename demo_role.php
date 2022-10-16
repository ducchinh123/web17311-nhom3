<?php

    require_once "./dao/pdo.php";
    require_once "./dao/roles.php";

    // Thêm

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];

        insert_role($id, $name);
    }

    // Xóa

    if (isset($_GET['id'])) {
        destroy_role($_GET['id']); 
    }




    // show
    $dsROLES = get_All();
    // var_dump($dsROLES);

    foreach ($dsROLES as $ROLES) {
        extract($ROLES);
        $delete = "demo_role.php?id=".$id;
        $update = "update_role.php?id=".$id;

        echo '<li><a href="#">'.$id.'</a> <a href="#">'.$name.'</a>  <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>'; 
    }




?>


<form action="demo_role.php" method="post">
        <input type="text" name="id" id="" placeholder="ID Vai trò">
        <input type="text" name="name" id="" placeholder="Tên vai trò">
        
        <br>
        <br>
    <input type="submit" name="submit" value="Insert">
</form>