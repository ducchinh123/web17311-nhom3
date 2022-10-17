<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="<?=CONTENT_URL?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>

    <?php  
        if (!empty($info_cart)) {
          
        
    ?>
    <div class="main">
        <div class="main-top">
            <p>Trang chủ > Nước hoa nữ > CHRISTIAN DIOR Miss > Giỏ hàng </p>
        </div>

        <table>
            <thead>
                <tr>
                    <td>Mã sản phẩm</td>
                    <td>Hình ảnh sản phẩm</td>
                    <td>Thương hiệu</td>
                    <td>Size</td>
                    <td>Số lượng</td>
                    <td>Thành tiền</td>
                    <td>Thao tác</td>
                </tr>
            </thead>

            <tbody>

          
                <tr>
                    <td><?php echo $info_cart['product_id'] ?></td>
                    <td><img width="100px" height="105px" src="<?=CONTENT_URL?><?php echo $info_cart['main'] ?>"></td>
                    <td><?php echo $info_cart['brand']  ?></td>
                    <td>M</td>
                    <td>- <?php echo $info_cart['quantity'] ?> +</td>
                    <td style="color: red;"><?php echo $info_cart['price'] ?>₫</td>
                    <td><button><i class="fa-solid fa-trash"></i></button></td>
                </tr>


           
            </tbody>
        </table>

        <div class="main-bottom">
            <h3>Tổng: <a><?php echo  $info_cart['price']  ?>₫</a></h3>
            <a href="<?=SITE_URL. "?info-pay&id=" . $info_cart['product_id']?>"><button type="submit">Thanh toán</button></a>
        </div>
    </div>

    </div>

    <?php
        }else{
            
        
    ?>

        <h3 class="notification">Giỏ hàng của bạn chưa có gì? Hãy quay lại mua sắm nhé! <a style="text-decoration: none;" href="layout.php">👈</a></h3> 
        
        <?php

        }
        ?>
</body>

</html>