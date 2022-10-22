<?php
require_once "../dao/pdo.php";
require_once "../dao/products.php";
require_once "../dao/categories.php";

$dsCATE = select_cateALL();
// var_dump($dsCATE);
$dsPRO = select_ALL_2();
// var_dump($dsPRO);
// $dsCATE_inner_join  =  
// thêm
if (isset($_POST['save'])) {
  
    $prod = $_POST['name_prod'];
    $brand = $_POST['brand'];
    $quan = $_POST['quantity'];
    $des = $_POST['detail'];
    $price = $_POST['price'];
    $cate_id = $_POST['cate'];

    insert_prod($prod, $brand, $quan, $des, $price, $cate_id);

    header('location: http://localhost/web17311-nhom3/admin/?list');

    // insert_prod($prod, $brand, $quan, $des, $price)
}

//xóa
if(isset($_GET['id'])){
    delete_prod($_GET['id']);
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
        <h4 id="first" style="marin-top: -50px; clear: both;"><a href="#end" style="text-decoration: none; font-family: arial; margin-left: 900px;">👇Cuộn xuống </a></h4>

        

        <div class="product">


            <div class="product-left">

                <h1>Thêm sản phẩm</h1>
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

                    <input type="submit" class="input_form_2" value="Thêm vào" name="save">

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
                    <?php
                    foreach ($dsPRO as $value) {

                    ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td style="width: 100px;"><?php echo $value['name'] ?></td>
                            <td><?php echo $value['brand'] ?></td>
                            <td style="width: 50px;"><?php echo $value['category_id'] ?></td> 
                            <td><?php echo $value['quantity'] ?></td>
                            <td><?php echo $value['price'] ?></td>
                            <td  style="width: 300px;"><?php echo $value['detail'] ?></td>
                            <td><a href="<?=ADMIN_URL ?>admin-prod/list.php?id=<?php echo$value['id'] ?>" style="text-decoration: none;">Xóa</a> 
                            | <a href="http://localhost/web17311-nhom3/admin/?update-list&id=<?php echo $value['id'] ?>" style="text-decoration: none;">Sửa</a> | <a href="<?= ADMIN_URL ?>?list-img&product_id=<?php echo $value['id']?> "  style="text-decoration: none;">Thêm ảnh</a></td>
                        <?php
                    }
                        ?>
                </table>

               
            </div>
 
        </div>
        <h4 id="end" style="margin-left: 1100px;"><a href="#first" style="text-decoration: none; font-family: arial; ">👆 Cuộn lên </a></h4>
    </div>

</body>

</html>