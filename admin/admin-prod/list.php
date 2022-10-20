<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../contents/css/style-admin.css">
    <title>Trang quản trị sản phẩm</title>
</head>
<body>
    <div class="main">
    <header><center><h1>Đây là trang quản trị sản phẩm của P-SHOP</h1></center></header>

    <div class="product">


        <div class="product-left">
            
               <h1>Thêm sản phẩm</h1>
            <hr>
            <form  action="" method="POST" enctype="multipart/form-data">
                
                <h3>Danh mục sản phẩm</h3>
               
                <select class="input_cate" name="" id="">
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">C</option>
                </select>

              
                <h3>Tên sản phẩm</h3> 
                <input type="text" class="input_form" name="" id=""> <br>

                <h3>Hãng</h3> 
                <input type="text" class="input_form" name="" id=""> <br>


                <h3>Số lượng</h3> 
                <input type="number" class="input_form" name="" id=""> <br>

                
                <h3>Mô tả</h3> 
                <input type="text" class="input_form" name="" id=""> <br>


                <h3>Giá</h3> 
                <input type="number" class="input_form" name="" id=""> <br>
                
                <input type="submit" class="input_form_2" value="Thêm vào">
    
            </form>
            
            
            
        </div>
        <div class="product-right">
            <table border="1" style="width:100%">
                <tr>
                    <th>Id</th>
                    <th>Tên sản phẩm</th>
                    <th>Hãng</th>
                    <th>Danh mục sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Mô tả ngắn</th>
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
                    <td><a href="" style="text-decoration: none;">Xóa</a> | <a href="" style="text-decoration: none;">Sửa</a>  | <a href="<?=ADMIN_URL?>?list-img">Thêm ảnh</a></td>
                    
            </table>
        </div>
    </div>
    
</div>

</body>
</html>