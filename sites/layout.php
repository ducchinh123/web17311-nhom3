<?php

require_once "./index.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=CONTENT_URL?>Images/P-SHOP.png" type="image/x-icon">
    <title>P-SHOP</title>
    <link rel="stylesheet" href="<?=CONTENT_URL?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="/web17311-nhom3/contents/framework/bootstrap/css/bootstrap.min.css"> -->
</head>

<body>
    <div class="container">
        <div class="container">
            <header>
                <div class="header-top">
                    <div class="logo">
                        <img src="<?=CONTENT_URL?>Images/P-SHOP.png" alt="">
                    </div>

                    <div class="find">
                        
                        <div><input type="search" placeholder="  Bạn muốn tìm gì..."></div>
                        <div><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></div>
                    </div>
                    <div class="icon">
                        <div class="phone">
                            <button><i class="fa-solid fa-phone"></i></button>
                            <a href="">0123456789</a>
                        </div>
                        <div class="booklist">
                           <a href="<?=SITE_URL?>?log-in"><i class="fa-solid fa-address-book"></i></a> 
                           <a href="<?=SITE_URL?>?info-cart"><i class="fa-solid fa-cart-shopping"></i></a> 
                        </div>
                    </div>
                </div>

                <nav>
                    <div class="menu">
                        <ul>
                            <li><i class="click fa-solid fa-house-user"></i><a href="<?=SITE_URL?>">Trang chủ</a></li>
                            <li><i class="fa-regular fa-newspaper"></i><a href="">Sản phẩm</a>

                            
                                <ul class="menu-level">

                                <?php
                            
                            
                            foreach ($list_categories_new as $cate_new){
                              
                                // var_dump($cate_new['name']);


                                if ($cate_new['name']=="Nước hoa nữ") {
                                    $link = "?search-cate-girl";
                                }elseif ($cate_new['name']=="Nước hoa nam") {
                                    $link = "?search-cate-boy"; 
                                }elseif($cate_new['name']=="Nước hoa cho bé"){
                                    $link = "?search-cate-kid";
                                }else{
                                    $link = "?search-cate-girl";
                                    $link = "?search-cate-boy"; 
                                    $link = "?search-cate-kid";
                                }
                                // var_dump($cate_new);

                                ?>


                                    <li><a href="<?=SITE_URL?><?php echo $link?>"><i class="fa-solid fa-play"></i><?php echo $cate_new['name'] ?></a></li>
                                    
                                    <?php
                            }
                                ?>
 
                                </ul>

                                
                            </li>
                            <li><i class="clicks fa-solid fa-message"></i><a href="">Thông tin</a></a></li>
                            <li><i class="clicks fa-solid fa-book"></i><a href="">Giới thiệu</a></a></li>
                            <li><i class="fa-solid fa-address-book"></i><a href="">Liên hệ</a></li>
                        </ul>
                    </div>
                </nav>

            </header>


        <main>

            <?php   include_once $VIEW_NAME      ?>

            
        </main>



            <footer>
                <div class="container_footer">
                    <div class="itemI">
                        <img src="<?=CONTENT_URL?>Images/P-SHOP.png" alt="">

                        <p class="slogen">Trân trọng từng cảm xúc mùi hương của bạn!</p> <br>

                        <p><strong>Địa chỉ: Phố Trịnh Văn Bô</strong></p>
                    </div>

                    <div class="itemII">
                        <h3>Thông tin liên hệ</h3>

                        <ul>
                            <li>
                                <p>Số điện thoại liên hệ: <span>0123456789</span> </p>
                            </li>

                            <li>
                                <p>Email: <span>group3@pshop.com.vn</span></p>
                            </li>
                        </ul>
                    </div>

                    <div class="itemIII">
                        <h3>Nước hoa bán chạy</h3>

                        <ul>
                            <li>
                                <a href="">
                                    <p>Nước hoa nữ</p>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <p>Nước hoa nam</p>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <p>Nước hoa cho bé</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="item4">
                        <h3>Hỗ chợ khách hàng</h3>

                        <ul>
                            <li>
                                <p>✓ Hướng dẫn mua hàng</p>
                            </li>

                            <li>
                                <p>✓ Hướng dẫn thanh toán</p>
                            </li>

                            <li>
                                <p>✓ Câu hỏi thường gặp</p>
                            </li>

                            <li>
                                <p>✓ Chính sách đổi trả</p>
                            </li>

                            <li>
                                <p>✓ Chính sách giao hàng</p>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="creater">
                    <p>© Copyright by Nhóm 3</p>
                </div>
            </footer>




        </div>
</body>
