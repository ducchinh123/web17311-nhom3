<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="../contents/css/style-admin.css">
</head>
<body>
    <section id="container">
    <!-- Header start -->
        <header>
            <div class="logo">
               <img src="../contents/Images/P-SHOP.png" alt="">
            </div>
            <div class="banner">
                <div class="banner-content">
                    <div class="search"></div>
                    <div class="username">
                    </div>
                </div>
            </div>
        </header>
    <!-- Header end -->
                
    <!-- Aside start -->
        <aside>
            <!-- Menu start -->
            <nav>
                <ul>

                <li><a href="<?=ADMIN_URL?>?list-user">
                        <i class="fa fa-user"></i>
                        <span>Quản lý Users</span>
                    </a>
                    </li>

                    <li><a href="<?=ADMIN_URL?>?list-cate">
                    <i class="fa-solid fa-list"></i>
                        <span>Quản lí danh mục</span>
                    </a>
                    </li>

                    <li><a href="<?=ADMIN_URL?>?list">
                        <i class="fa fa-book"></i>
                        <span>Quản lí hàng hóa</span>
                    </a>
                    </li>


                    <li><a href="<?=ADMIN_URL?>?list-img">
                    <i class="fa-solid fa-image"></i>
                        <span>Quản lí ảnh</span>
                    </a>
                    </li>
                    

                    <li><a href="">
                    <i class="fa-solid fa-comment"></i>
                        <span>Quản lý Bình luận</span>
                    </a>
                    </li>


                    <li><a href="#">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span>Biểu đồ</span>
                    </a>
                    </li>

                    

                    

                </ul>
            </nav>
            <!-- Menu end -->



 <!-- Wrapper start -->
 <section class="wrapper">
    <div class="wrapper-content">
            <?php include_once $VIEW_NAME  ?>
    </div>
    <footer></footer>
</section>





            <!-- Wrapper end -->
            </aside>
    <!-- Aside end -->


    </section>
</body>
</html>