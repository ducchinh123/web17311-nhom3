<?php

    require "connect.php";

    $id = (int) $_GET['id'];

    // Thực hiện xóa
    

    $sql = "DELETE FROM rooms WHERE `rooms`.`room_id` = {$id}";

    $query = $connect->prepare($sql);

    $connect->exec($sql);

    if($connect){
        header("location: show.php");
    }


?>