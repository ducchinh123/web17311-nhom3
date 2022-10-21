<?php
require_once "../dao/pdo.php";
require_once "../dao/products.php";
require_once "../dao/categories.php";

// lấy thông tin
if (isset($_GET['id'])) {
    $codePRO = $_GET['id'];
    $infoPRO = get_info_prod($codePRO);
    extract($infoPRO);
}

//sửa
if (isset($_POST['id'])) {
    update_prod($_POST['name_prod'], $_POST['brand'], $_POST['quantity'], $_POST['detail'], $_POST['price'], $_POST['cate'], $_POST['id']);
    // update_prod($id, $name, $brand, $quan, $des, $price)

    header('location: http://localhost/web17311-nhom3/admin/?list');
}


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

                    <input type="text" class="input_form" name="cate" value="<?= $category_id ?>">


                    <h3>Tên sản phẩm</h3>
                    <input type="text" class="input_form" name="name_prod" id="" value="<?= $name ?>"> <br>

                    <h3>Hãng</h3>
                    <input type="text" class="input_form" name="brand" id="" value="<?= $brand ?>"> <br>


                    <h3>Số lượng</h3>
                    <input type="number" class="input_form" name="quantity" id="" value="<?= $quantity ?>"> <br>


                    <h3>Mô tả</h3>
                    <input type="text" class="input_form" name="detail" id="" value="<?= $detail ?>"> <br>


                    <h3>Giá</h3>
                    <input type="number" class="input_form" name="price" id="" value="<?= $price ?>"> <br>
                    <input type="hidden" name="id" value="<?= $id ?>">

                    <input type="submit" class="input_form_2" value="Sửa nó" name="save">

                </form>



            </div>

        </div>

    </div>

</body>

</html>