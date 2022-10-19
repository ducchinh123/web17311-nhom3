<?php

    
require "./dao/pdo.php";
require "./dao/users.php";
require_once "./dao/roles.php";

        $dsROLE = get_All();
        // var_dump($dsROLE);

    // Thêm dữ liệu
    if (isset($_POST['insert_user'])) {
        inser_in_user($_POST['name'], $_POST['password'], $_POST['confirm'], $_POST['email'], $_POST['sdt'], $_POST['role']);
    }

      

    // xóa

    if (isset($_GET['id'])) {
        delete_user($_GET['id']);
    }

    

    $dsUSER = select_all_user();
    foreach ($dsUSER as $value) {
        extract($value);

        $delete = "demo_user.php?id=".$id;
        $update = "update_user.php?id=".$id;

        echo '<li><a href="#">'.$name_user.'</a>  |  <a href="#">'.$password.'</a> 
        <a href="#">'.$confirm.'</a>  |  <a href="#">'.$email.'</a>  |
        <a href="#">'.$sdt.'</a>  | <a href="#">'.$role_id.'</a>  
        <a href="'.$update.'">Update</a> <a href="'.$delete.'">Delete</a></li>';

       

    }
    

?>

<form action="demo_user.php" method="POST">
        <input type="text" name="name"  id="" placeholder=" tên khách hàng"> <br> <br>
        <input type="password" name="password" id="" placeholder="password của khách hàng"> <br> <br>
        <input type="password" name="confirm" id="" placeholder="confirm password của khách hàng"> <br> <br>
        <input type="email" name="email" id="" placeholder="email của khách hàng"> <br> <br>
        <input type="number" name="sdt" id="" placeholder="sđt của khách hàng"> <br> <br>
        <select name="role" id="">
               
        <?php
                foreach ($dsROLE as $item) {
                       
                
        ?>
                <option value="<?php echo $item['id']  ?>"><?php echo $item['name']  ?></option>
                
        <?php
                }
        ?>
              
       
        </select>

        <br>
        <br>
        <input type="submit" name="insert_user" value="INSERT">
</form>