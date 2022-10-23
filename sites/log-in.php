<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="<?=CONTENT_URL?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>
    <div class="main">

            <div class="main-top">
                <p>Đăng nhập</p>
            </div>

            <div class="back">
                <div class="change-password">
                    <div class="top">
                        <p>Đăng nhập</p>
                    </div>

                    <form action="<?=SITE_URL . '?post-login'?>" method="post">
                    
                  

                        <?php if(isset($_GET['msg'])): ?>
                        <h5 style="color: red;"><?= $_GET['msg'] ?></h5>
                        <?php endif?>
                     


                    <div class="form">
                        <input type="email" name="email" id="" placeholder="email đăng nhập"> <br>
                        <input type="text" name="password" id="" placeholder="Mật khẩu"> <br>
                        
                    </div>

                    <div class="bottom">
                    <center>hoặc <a href="<?=SITE_URL?>?sign-in" style="text-decoration: none;">Đăng ký</a></center> <br>
                    <button type="submit">Chấp nhận</button>
                    </form>
                     
                    </div>
                </div>
            </div>
        </div>

       
    </div>
</body>

</html>