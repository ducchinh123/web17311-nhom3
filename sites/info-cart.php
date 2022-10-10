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
                    <td>NHCDM 01</td>
                    <td><img width="100px" height="105px" src="./Images/product/825c93fd9d23597d00326.jpg"></td>
                    <td>Dior</td>
                    <td>M</td>
                    <td>- 1 +</td>
                    <td style="color: red;">2.690.000₫</td>
                    <td><button><i class="fa-solid fa-trash"></i></button></td>
                </tr>
            </tbody>
        </table>

        <div class="main-bottom">
            <h3>Tổng: <a>2.690.000₫</a></h3>
            <a href="<?=SITE_URL?>?info-pay"><button type="submit">Thanh toán</button></a>
        </div>
    </div>

    </div>
</body>

</html>