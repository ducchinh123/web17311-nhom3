<?php
require_once "../dao/pdo.php";
require_once "../dao/products.php";
require_once "../dao/categories.php";




?>
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
        <header>
            <center>
                <h1>Đây là trang quản trị sản phẩm của P-SHOP</h1>
            </center>
        </header>

        <div class="product">


            <div class="product-left">

                <h1>Sửa sản phẩm</h1>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">

                    <h3>Danh mục sản phẩm</h3>

                    <select class="input_cate" name="cate" id="">

                        <?php
                        foreach ($dsCATE as $key) {

                        ?>
                            <option value="<?php echo $key['id']  ?>"><?php echo $key['name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>


                    <h3>Tên sản phẩm</h3>
                    <input type="text" class="input_form" name="name_prod" id=""> <br>

                    <h3>Hãng</h3>
                    <input type="text" class="input_form" name="brand" id=""> <br>


                    <h3>Số lượng</h3>
                    <input type="number" class="input_form" name="quantity" id=""> <br>


                    <h3>Mô tả</h3>
                    <input type="text" class="input_form" name="detail" id=""> <br>


                    <h3>Giá</h3>
                    <input type="number" class="input_form" name="price" id=""> <br>

                    <input type="submit" class="input_form_2" value="Sửa nó" name="save">

                </form>



            </div>
           
        </div>

    </div>

</body>

</html>