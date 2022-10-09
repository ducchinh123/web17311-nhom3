<?php
require_once "./dao/pdo.php";
require_once "./dao/roles.php";

// show thông tin
if (isset($_GET['id'])) {
    $code = $_GET['id'];
    $arr = get_info($code);
    extract($arr);
}

// bắt đầu update
if(isset($_POST['id'])){
    update($_POST['name'], $_POST['id']);
}
?>

<form action="update_role.php" method="POST">
    Name: <input type="text" name="name" value="<?=$name ?>">
    <input type="hidden" name="id" value="<?=$id ?>">
    <input type="submit" value="update" name="update">
</form>