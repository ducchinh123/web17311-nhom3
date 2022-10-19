<?php

    
require_once "./dao/pdo.php";
require_once "./dao/users.php";
require_once "./dao/roles.php";

    $dsROLE = get_All();
        // lấy thông tin của user
       if (isset($_GET['id'])) {
            $codeUSER = $_GET['id'];
            $info_user = get_one_user($codeUSER);

            extract($info_user);
            var_dump($info_user);

       }

       if (isset($_POST['id'])) {
        update_user($_POST['name'], $_POST['email'], $_POST['sdt'], $_POST['role'], $_POST['id']);
        header('Location: demo_user.php');
       }

       
     

       

      

    
    

?>

<form action="update_user.php" method="post">
        <input type="text" name="name" value="<?=$name_user ?>"  > <br> <br>
        <input type="email" name="email" value="<?=$email ?>"> <br> <br>
        <input type="number" name="sdt" value="<?=$sdt ?>"> <br> <br>
        <input type="hidden" name="id" value="<?=$id ?>">
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
        <input type="submit" name="update_user" value="UPDATE">
</form>