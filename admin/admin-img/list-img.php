<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../contents/css/style-admin.css">
    <title>Trang quản trị ảnh sản phẩm</title>
</head>
<body>
    <div class="main">
    <header><center><h1>Đây là trang quản trị ảnh sản phẩm của P-SHOP</h1></center></header>

    <div class="product">


        <div class="product-left_3">
            
               <h1>Thêm sản phẩm</h1>
            <hr>
            <form  action="" method="POST" enctype="multipart/form-data">
                
                
                <h3>Id product</h3> 
                <input type="text" class="input_form" name="" id=""> <br>
              
                <h3>Ảnh chính</h3> 
                <input type="file" class="input_img" name="" id=""> <br>

                <h3>Ảnh phụ 1</h3> 
                <input type="file" class="input_img" name="" id=""> <br>

                <h3>Ảnh phụ 2</h3> 
                <input type="file" class="input_img" name="" id=""> <br>


                <h3>Ảnh phụ 3</h3> 
                <input type="file" class="input_img" name="" id=""> <br>

                
                
                <input type="submit" class="input_form_2" value="Thêm vào">
    
            </form>
            
            
            
        </div>
        <div class="product-right_3">
            <table border="1" style="width:100%">
                <tr>
                    <th>Id</th>
                    <th>Ảnh chính</th>
                    <th>Ảnh phụ 1</th>
                    <th>Ảnh phụ 2</th>
                    <th>Ảnh phụ 3</th>
                    <th>Quản lí</th>
                </tr>
                
                <tr>
                    <td></td>
                    <td><img src="" style="width: 180px; height: 100px;" alt=""></td>
                    <td><img src="" style="width: 180px; height: 100px;" alt=""></td>
                    <td><img src="" style="width: 180px; height: 100px;" alt=""></td>
                    <td><img src="" style="width: 180px; height: 100px;" alt=""> </td>
                    
                    <td><a href="" style="text-decoration: none;">Xóa</a> | <a href="" style="text-decoration: none;">Sửa</a></td>
                    
            </table>
        </div>
    </div>
    
</div>

</body>
</html>