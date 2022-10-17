<?php
    require_once "../dao/pdo.php";
    require_once "../dao/products.php";
    require_once "../dao/product-img.php";
   
    
    // $dsPROD = select_prodALL();
    // var_dump($dsPROD);
    
    // var_dump($dsIMG);

    $dsPROD = select_prodALL();
    $dsPROD_2 = select_prodALL_2();
    $dsPROD_3 = select_prodALL_3();
    

    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Nước Hoa</title>
    <link rel="stylesheet" href="<?=CONTENT_URL ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>

<body>


    <div class="main">
        <div class="slider">
            <div class="waper">
                <div class="waper-left">
                    <a href="#"><img src="<?=CONTENT_URL?>/Images/banner/5c89636269bcade2f4ad.jpg" alt="banner"></a>

                    <div class="btn-next-left"><i class="fa-solid fa-angle-right"></i></div>

                    <div class="btn-next-right"><i class="fa-solid fa-angle-right"></i></div>
                    <div class="slider-round">
                        <i class="fa-regular fa-circle s-active"></i>
                        <i class="fa-regular fa-circle"></i>
                        <i class="fa-regular fa-circle"></i>
                        <i class="fa-regular fa-circle"></i>
                        <i class="fa-regular fa-circle"></i>
                        <i class="fa-regular fa-circle"></i>
                    </div>



                </div>
                <div class="waper-right">
                    <div> <a href="#"><img src="<?=CONTENT_URL?>/Images/banner/0f2d2bc62118e546bc09.jpg" alt=""></a></div>
                    <div> <a href="#"></a><img src="<?=CONTENT_URL?>/Images/banner/a2b7445c4e828adcd393.jpg" alt=""></a></div>

                </div>
            </div>

        </div>


        <section class="section1">
            <div class="section-item">
                <div class="item1">
                    <div class="item-img bg-pink"><a href="<?=SITE_URL?>?search-cate-boy"><img src="<?=CONTENT_URL?>Images/list/c7de4959408784d9dd96.jpg" alt=""></a>
                    </div>
                    <div class="item-tittle">Nước hoa nam</div>
                </div>
                <div class="item1">
                    <div class="item-img bg-blue1"><a href="<?=SITE_URL?>?search-cate-girl"><img src="<?=CONTENT_URL?>Images/list/b361f286fb583f066649.jpg" alt=""></a></div>
                    <div class="item-tittle">Nước hoa nữ</div>
                </div>
                <div class="item1">
                    <div class="item-img bg-blue2"><a href="<?=SITE_URL?>?search-cate-kid"><img src="<?=CONTENT_URL?>Images/list/8b19292721f9e5a7bce8.jpg" alt=""></a></div>
                    <div class="item-tittle">Nước hoa bé</div>
                </div>
            </div>
        </section>

        <section class="section2">
            <div class="slider2">
                <div class="slider2-titlle2"><a href="#">Xem tất cả</a></div>
                <div class="slider2-banner2">
                    <div class="silder2-banner2-titlle2">
                        <p>Nước hoa bán chạy</p>
                        <i class="fa-solid fa-play"></i>

                    </div>
                </div>
                <div class="slider2-item2">
                    <div class="item2">
                        <div class="item2-img bg-blue2"><a href="<?=SITE_URL?>?info-prod"><img src="<?=CONTENT_URL?>Images/product/1.jpg" alt=""></a></div>
                        <div class="item2-tittle">Versace Bright Absolu</div>
                        <div class="item2-price bg-price-color">1.000.000 ₫</div>
                    </div>
                    <div class="item2">
                        <div class="item2-img bg-blue2"><a href="<?=SITE_URL?>?info-prod"><img src="<?=CONTENT_URL?>Images/product/2.jpg" alt=""></a></div>
                        <div class="item2-tittle">Versace Bright Crystal</div>
                        <div class="item2-price bg-price-color">2.000.000 ₫</div>
                    </div>
                    <div class="item2">
                        <div class="item2-img bg-blue2"><a href="<?=SITE_URL?>?info-prod"><img src="<?=CONTENT_URL?>Images/product/3.jpg" alt=""></a></div>
                        <div class="item2-tittle">Lancôme Poême</div>
                        <div class="item2-price bg-price-color">3.000.000 ₫</div>
                    </div>
                    <div class="item2">
                        <div class="item2-img bg-blue2"><a href="<?=SITE_URL?>?info-prod"><img src="<?=CONTENT_URL?>Images/product/4.jpg" alt=""></a></div>
                        <div class="item2-tittle">Lolita Lempicka For Women</div>
                        <div class="item2-price bg-price-color">6.000.000 ₫</div>
                    </div>
                </div>
            </div>
            <div class="section2-next-left"><i class="fa-solid fa-angle-right"></i></div>

            <div class="section2-next-right"><i class="fa-solid fa-angle-right"></i></div>
        </section>

        <section class="section3">
            <div class="section3-item">
                <div class="section3-banner3">
                    <div class="section3-banner3-titlle3">
                        <p>Nước hoa nữ</p>
                        <i class="fa-solid fa-play"></i>

                    </div>
                </div>


                <div class="section3-item3">

                    <?php

                            foreach ($dsPROD as $item) {
                            
                            


                    ?>
                   
                    <div class="item3">
                        <div class="item3-img bg-blue2"><a href="<?=SITE_URL . '?info-prod&id='. $item['product_id'] ?>"><img src="<?=CONTENT_URL?><?php echo $item['main']  ?>" alt=""></a></div>
                        <div class="item3-tittle"><?php echo $item['name']  ?></div>
                        <div class="item2-price bg-price-color"><?php echo $item['price'] ?>₫</div>
                    </div>



                    <?php
                            }

                            ?>
                   
                </div>
            </div>




        </section>
        <section class="section3">
            <div class="section3-item">
                <div class="section3-banner3">
                    <div class="section3-banner3-titlle3">
                        <p>Nước hoa nam</p>
                        <i class="fa-solid fa-play"></i>

                    </div>
                </div>


                <div class="section3-item3">

                <?php

                    foreach ($dsPROD_2 as $item) {
                        
                    
                ?>
                
                    <div class="item3">
                        <div class="item3-img bg-blue2"><a href="<?=SITE_URL . '?info-prod&id='. $item['product_id'] ?>"><img src="<?=CONTENT_URL?><?php echo $item['main'] ?>" alt=""></a></div>
                        <div class="item3-tittle"><?php echo $item['name'] ?></div>
                        <div class="item2-price bg-price-color"><?php echo $item['price'] ?>₫</div>
                    </div>

                    <?php
                            }
                    ?>
                   
            </div>




        </section>
        <section class="section3">
            <div class="section3-item">
                <div class="section3-banner3">
                    <div class="section3-banner3-titlle3">
                        <p>Nước hoa cho bé</p>
                        <i class="fa-solid fa-play"></i>

                    </div>
                </div>


                <div class="section3-item3">

                    <?php
                        foreach ($dsPROD_3 as $item) {
                            
                        
                    ?>
                    <div class="item3">
                        <div class="item3-img bg-blue2"><a href="<?=SITE_URL . '?info-prod&id='. $item['product_id'] ?>"><img src="<?=CONTENT_URL?><?php echo $item['main']  ?>" alt=""></a></div>
                        <div class="item3-tittle"><?php echo $item['name'] ?></div>
                        <div class="item2-price bg-price-color"><?php echo $item['price'] ?>₫</div>
                    </div>

                    <?php
                            }
                    ?>
                   
            </div>




        </section>
    </div>

</body>

</html>