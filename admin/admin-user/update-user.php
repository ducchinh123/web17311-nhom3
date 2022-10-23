<?php
    require_once '../dao/pdo.php';
    require_once '../dao/roles.php';
    require_once '../dao/users.php';

    $dsROLE=get_All();
    




    

    
    
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
                <input type="text" class="input_form" name="name_user" id=""> <br>

                <h3>Mật khẩu/Password</h3> 
                <input type="password" class="input_img" name="password" id=""> <br>

                <h3>Địa chỉ Email</h3> 
                <input type="email" class="input_form" name="email" id=""> <br>

                
                <h3>Số điện thoại</h3> 
                <input type="number" class="input_form" name="sdt" id=""> <br>


                
                
                <input type="submit" class="input_form_2" name="inser_in_user" value="Thêm vào">
    
            </form>
            
            
            
        </div>
       
    </div>
    
</div>

</body>
</html>