<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/P-SHOP.png" type="image/x-icon">
    <title>Trang thông tin sản phẩm</title>
    <link rel="stylesheet" href="<?=CONTENT_URL?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    

            <div class="main">
                    <p class="title_list"> <a href="">Trang chủ</a> > <a href=""> Nước hoa nữ</a> > <a href=""><?php echo $info_cart['name']  ?></a> > <a href="">Thanh toán </a></p>
                    <div class="border-bottom"></div>

                    <form action="">
                   
                    <div class="container_info">

                        
                            <div class="info_left">
                                <h3>Thông tin khách hàng</h3>
                                <div class="border-bottom"></div>


                                <div class="name_name">
                                        <section class="input_name1">
                                                <p>Họ và tên</p>

                                                <input type="text" placeholder="Vui lòng nhập họ tên đầy đủ">
                                        </section>

                                        <section class="input_name2">
                                                <p>Danh xưng</p>

                                                <ul>
                                                    <li><input type="radio" checked> Anh</li>
                                                    <li><input type="radio"> Chị</li>
                                                </ul>
                                        </section>

                                </div>


                                <div class="input_sdt">
                                    <p>Số điện thoại</p>

                                    <input type="text" placeholder="Vui lòng nhập SĐT của bạn">
                                </div>

                                <div class="address">
                                        <p>Địa chỉ</p>

                                        <div class="sum_input_address">
                                            <!-- <input type="text" placeholder="Chọn tỉnh, thành phố"> -->

                                            <select name="" id="">
                                                <option value="">Chọn tỉnh, thành phố</option>
                                            </select>

                                            <input type="text" placeholder="Điền quận, huyện">


                                            <input type="text" placeholder="Điền phường xã">


                                            <input type="text" placeholder="Điền tên đường, số nhà">
                                            
                                        </div>
                                </div>


                                <div class="feedback">
                                        <p>Góp ý giao hàng</p>

                                        <textarea name="" id="" cols="99" rows="3">

                                        </textarea>

                                </div>


                            </div>

                            <div class="info_right">
                                <h3>Thông tin đơn hàng</h3>
                                <!-- <div class="border-bottom"></div> -->

                                <div class="order">
                                        <p class="item_pro">Sản phẩm</p> <p class="item_sum">Tổng</p>
                                        <br>
                                        <div class="border-bottom"></div>

                                        <div class="info_order_left">
                                                <p><?php echo $info_cart['name']  ?></p>
                                                <p>Thương hiệu: <span><?php echo $info_cart['brand']  ?></span> </p> 
                                                <p>Size: <span>M</span> </p> 
                                                <p>Số lượng: <span><?php echo $info_cart['quantity']  ?></span> </p> 
                                        </div>

                                        <div class="info_order_right">
                                                <p><?php echo $info_cart['price']  ?>  ₫</p>
                                        </div>

                                        <div class="border-bottom2"></div>

                                        <p class="sum_orders">Tổng đơn hàng: <span><?php echo $info_cart['price']  ?>₫</span></p>
                                </div>

                                <div class="pay_method">
                                        <p>Chọn phương thức thanh toán</p>

                                        <ul>
                                            <li>
                                                <input type="radio"> Thẻ tín dụng
                                            </li>

                                            <li>
                                                <input type="radio"> Thanh toán tại nhà
                                            </li>


                                        </ul>
                                </div>

                                
                                <button type="submit">Đặt hàng</button>
                            </div>
                    </div>

                   
                </form>
                       
                           
            </div>


</body>
</html>