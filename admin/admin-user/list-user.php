<?php
    require_once '../dao/pdo.php';
    require_once '../dao/roles.php';
    require_once '../dao/users.php';

    $dsROLE=get_All();
    // if(isset($_POST['inser_in_user'])){
    //     inser_in_user($_POST['name'],$_POST['name_user'],$_POST['password'],$_POST['email'],$_POST['sdt']);
    //   }elseif(isset($_GET['delete_user']))
    //   {
    //     deleteUser($_GET['delete_user']);
    //   }elseif(isset($_POST['update_user']))
    //   {
    //     updateUser($_POST['name'],$_POST['name_user'],$_POST['password'],$_POST['email'],$_POST['sdt'],$_POST['id']);
    //   }




    if (isset($_POST['inser_in_user'])) {
        inser_in_user($_POST['name_user'], $_POST['password'], $_POST['confirm'], $_POST['email'], $_POST['sdt'], $_POST['role']);
        header('location: http://localhost/web17311-nhom3/admin/?list-user');
    }
    if(isset($_GET['delete_user'])){
        delete_user($_GET['delete_user']);
        header('location: http://localhost/web17311-nhom3/admin/?list-user');
        

    }
    if(isset())



    // hiển thị tất cả các user

    $dsUSER= select_all_user();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../contents/css/style-admin.css">
    <title>Trang quản trị người dùng</title>
</head>
<body>
    <div class="main">
    <header><center><h1>Đây là trang quản trị người dùng của P-SHOP</h1></center></header>

    <div class="product">


        <div class="product-left">
            
               <h1>Thêm người dùng</h1>
            <hr>
            <form  action="" method="POST" enctype="multipart/form-data">
                
                <h3>Vai trò</h3>
               
                <select class="input_cate" name="role" id="">
                        <?php

                        foreach ($dsROLE as $key) {
                            
                       

                ?>
                        <option value="<?php echo $key['id']  ?>"><?php echo $key['name']  ?></option>


                        <?php
                         }

                        ?>
                </select>

              
                <h3>Tên người dùng</h3> 
                <input type="text" class="input_form" name="name_user" id=""> <br>

                <h3>Mật khẩu/Password</h3> 
                <input type="password" class="input_img" name="password" id=""> <br>

                <h3>Nhập lại mật khẩu/Confirm Password</h3> 
                <input type="password" class="input_form" name="confirm" id=""> <br>


                <h3>Địa chỉ Email</h3> 
                <input type="email" class="input_form" name="email" id=""> <br>

                
                <h3>Số điện thoại</h3> 
                <input type="number" class="input_form" name="sdt" id=""> <br>


                
                
                <input type="submit" class="input_form_2" name="inser_in_user" value="Thêm vào">
    
            </form>
            
            
            
        </div>
        <div class="product-right">
            <table border="1" style="width:100%">
                <tr>
                    <th>Id</th>
                    <th>Tên</th>
                    <th>Mật khẩu</th>
                    <th>Mật khẩu nhập lại</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Vai trò</th>
                    <th>Quản lí</th>
                </tr>



                
         
                


                <?php

                        foreach ($dsUSER as $user) {
                          
                      
                ?>

<tr>
                    <td><?php echo $user['id']  ?></td>
                    <td><?php echo $user['name_user']  ?></td>
                    <td><?php echo $user['password']  ?></td>
                    <td><?php echo $user['confirm']  ?></td>
                    <td><?php echo $user['email']  ?></td>
                    <td><?php echo $user['sdt']  ?></td>
                    <td><?php echo $user['role_id']  ?></td>
                    <td><a href="<?=ADMIN_URL ?>admin-user/list-user.php?delete_user=<?php echo $user['id']  ?>" style="text-decoration: none;">Xóa</a> 
                    | <a href="" style="text-decoration: none;">Sửa</a></td>      
</tr>
                  <?php

                        }
            ?>

              
            </table>
        </div>
    </div>
    
</div>

</body>
</html>