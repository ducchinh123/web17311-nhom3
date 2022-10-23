<?php
    require_once '../dao/pdo.php';
    require_once '../dao/roles.php';
    require_once '../dao/users.php';

    $dsROLE=get_All();
    
    if (isset($_GET['id'])) {
        $codeUser = $_GET['id'];
        $infoUser = get_one_user($codeUser);
        extract($infoUser);

    }
    
    if(isset($_POST['id']))
{
    update_user($_POST['name_user'], $_POST['email'], $_POST['sdt'], $_POST['role'],$_POST['id']);
    header('location: http://localhost/web17311-nhom3/admin/?list-user');
}




    

    
    
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

    <marquee behavior="" direction="">
    <p style=""> <strong style="font-weight: bold; color: red;">*Lưu ý:</strong> Hãy điền đầy đủ các thông tin của form yêu cầu trước khi click vào "Thêm vào". </p>

    </marquee>
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
                <input type="text" class="input_form" name="name_user" id="name_user" value="<?= $name_user ?>"> <br>

            

                <h3>Địa chỉ Email</h3> 
                <input type="email" class="input_form" name="email" id="email" value="<?= $email ?>"> <br>

                
                <h3>Số điện thoại</h3> 
                <input type="number" class="input_form" name="sdt" id="sdt" value="<?= $sdt ?>"> <br>
                <input type="hidden" name="id" value="<?=$id ?>">

                
                
                <input type="submit" class="input_form_2" name="inser_in_user" value="Sửa" style="cursor: pointer;">
    
            </form>
            
            
            
        </div>
       
    </div>
    
</div>

</body>
</html>