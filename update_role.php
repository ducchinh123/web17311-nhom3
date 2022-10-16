<?php

require_once "./dao/pdo.php";
require_once "./dao/roles.php";

    // Lấy thông tin

    if (isset($_GET['id'])) {
        $code = $_GET['id'];
        $arr = get_info_role($code);
        extract($arr);
    }

    // Update

    if (isset($_POST['id'])) {
        update_role($_POST['name'], $_POST['id']);
        header('location: demo_role.php');

    }



?>


<form action="update_role.php" method="post">
        <input type="text" name="name" id="" value="<?=$name ?>">
        <input type="hidden" name="id" value="<?=$id ?>">
        <br>
        <br>
    <input type="submit" name="submit" value="Update">
</form>