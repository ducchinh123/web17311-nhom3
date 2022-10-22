<?php
    require_once '../dao/pdo.php';
    require_once '../dao/users.php';
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
               
                <select class="input_cate" name="" id="">
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">C</option>
                </select>

              
                <h3>Tên người dùng</h3> 
                <input type="text" class="input_form" name="" id=""> <br>

                <h3>Mật khẩu/Password</h3> 
                <input type="text" class="input_img" name="" id=""> <br>

                <h3>Nhập lại mật khẩu/Confirm Password</h3> 
                <input type="text" class="input_form" name="" id=""> <br>


                <h3>Địa chỉ Email</h3> 
                <input type="email" class="input_form" name="" id=""> <br>

                
                <h3>Số điện thoại</h3> 
                <input type="number" class="input_form" name="" id=""> <br>


                
                
                <input type="submit" class="input_form_2" value="Thêm vào">
    
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
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="" style="text-decoration: none;">Xóa</a> | <a href="" style="text-decoration: none;">Sửa</a></td>
                    
            </table>
        </div>
    </div>
    
</div>

</body>
</html>