<?php
    require_once "../dao/pdo.php";
    require_once "../dao/products.php";
    require_once "../dao/product-img.php";
   
    
    // $dsPROD = select_prodALL();
    // var_dump($dsPROD);
    
    // var_dump($dsIMG);


    $dsPROD_2 = select_prodALL_2();
   

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/P-SHOP.png" type="image/x-icon">
    <title>Nước hoa nam</title>
    <link rel="stylesheet" href="<?=CONTENT_URL?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="container">

            <div class="main">
                <p><a href="">Sản phẩm</a> > <a href="">Nước hoa nam</a></p>
                <div class="border-bottom"></div> 

                <div class="contai_cate">
                        <div class="cate_title">
                                <p>Nước hoa nam  <span class="span1">▶</span></p> 
                        </div>

                        <div class="product_in_cate">
                                    <?php

                                    foreach ($dsPROD_2 as $item) {



                                    ?>

                                    <div class="prod1">
                                    <img src="<?=CONTENT_URL?><?php echo $item['main'] ?>" alt="">

                                    <a href="<?=SITE_URL?>?info-prod">
                                        <p><?php echo $item['name'] ?> </p>
                                    </a>

                                    <p class="price"><?php echo $item['price'] ?>$</p>

                                    </div>


                                    <?php
                                    }
                                    ?>

                                

                                   
                        </div>


                </div>
            </div>

          

               
          
    </div>
</body>
</html>