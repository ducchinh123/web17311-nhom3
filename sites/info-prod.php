<?php


require_once "../dao/pdo.php";
require_once "../dao/products.php";
require_once "../dao/product-img.php";

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <link rel="stylesheet" href="dangnhap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
        
        <p class="text-[#FFB6C1] mt-3 ml-3">
            Trang chủ > Nước hoa nữ > CHRISTIAN DIOR Miss
        </p>
        <hr>
        <section class="pro-info w-[812px] mx-auto mt-10">
            <div class="info flex ">
                <div class="image w-[226px] h-[180px] border border-[#000000] rounded-[40px]">
                    <img class="w-[133px] h-[141px] mx-auto mt-5" src="<?=CONTENT_URL?><?php echo $info_product['main']  ?>" alt="">
                    <h4 class="font-[600] border-b-2 border-[#000000] mt-5 ">
                        Sản Phẩm Liên Quan
                    </h4>
                    <div class="sub-image mt-5 flex space-x-[20px]">
                        <img class="w-[64px] h-[48px] border border-[#000000] p-[10px]" src="Images/Danh mục/d1.jpg" alt="">
                        <img class="w-[64px] h-[48px] border border-[#000000] p-[10px]" src="Images/Danh mục/d2.jpg" alt="">
                        <img class="w-[64px] h-[48px] border border-[#000000] p-[10px]" src="Images/Danh mục/d3.jpg" alt="">
                    </div>
                </div>
                <div class="detail-info ml-[60px] leading-8">
                    <p>Tên: <span class="text-[16px] font-[400]"><?php echo $info_product['name']  ?></span></p>
                    <p>Thương hiệu: <span ><?php echo $info_product['brand']  ?></span></p>
                    <p>Size: S M XL</p>
                    <p>Số lượng: 
                        <button>-</button>
                        <span><?php echo $info_product['quantity']  ?></span>
                        <button>+</button>
                    </p>
                <a href="<?=SITE_URL . "?info-cart&id=" . $info_product['product_id']?>">
                    <button type="submit" class="mt-6 px-4 bg-[#FFB6C1] font-[400] text-[16px] rounded-[5px]">
                      
                    Thêm vào giỏ
                    </button>
                    </a>
                </div>
                <div class="price mt-[120px] text-left h-[25px] px-5 font-[400] text-[16px] bg-[#FFB6C1] ">
                    <p class="">Giá: <span class="text-[#FF0000]"><?php echo $info_product['price']  ?>₫</span></p>
                </div>
            </div> <!-- End .info-->
        </section> <!-- End .pro-info-->
        <section class="detail w-[812px] mx-auto mt-[90px]">
            <h4 class="font-[600] w-[136px] border-b-2 border-[#000000]">
                Thông tin chi tiết
            </h4>
            <div class="mt-6 bg-[#FFB6C1] p-4 text-[#FFFFFF]">
                <p class="text-[#FFFFFF]">
                    <?php echo $info_product['detail'] ?>
                </p>
                <div class=" mt-4 mb-4">
                    <img class="w-[162px] h-[88px] mx-auto" src="<?=CONTENT_URL?><?php echo $info_product['main'] ?>" alt="">
                </div>
                <!-- <p >
                    Miss Dior trước đó nhưng Miss Dior Absolute Blooming có vẻ như thể hiện một khía cạnh mới: 
                    gợi cảm, đầy đam mê và hiện đại hơn.
                </p> -->
            </div>
        </section> <!-- End .detail-->

        <section class="comment w-[812px] mx-auto mt-[20px]">
            <h4 class="font-[600] w-[80px] border-b-2 border-[#000000]">
                Bình luận
            </h4>
            <form action="">
                <div class="mt-3 flex">
                    <input class="bg-[#D9D9D9] w-[760px] py-[10px]"
                        type="text">
                    <input class="bg-[#D9D9D9] w-[50px] py-[10px] border-[#000000] border-l-[3px]"
                        type="submit">
                </div>
                
            </form>
        </section>
       
   
    
</body>

</html>