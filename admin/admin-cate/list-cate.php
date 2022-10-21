<?php

    require_once "../dao/pdo.php";
    require_once "../dao/categories.php";
    

   
    // Thêm dữ liệu/danh mục

    if (isset($_POST['inser_cate'])) {
        insert_cate($_POST['name_cate']);
        header('location: http://localhost/web17311-nhom3/admin/?list-cate');
        // header('location: list-cate.php');
    }

        // Xóa dữ liệu

        if (isset($_GET['id'])) {
            delete_cate($_GET['id']);
            header('location: http://localhost/web17311-nhom3/admin/?list-cate');
     }


    // Sửa 

    // bước 1: Lấy thông tin
    
    if (isset($_GET['id'])) {
        $codeCATE = $_GET['id'];
        $info_cate = get_info_2($codeCATE);
        extract($info_cate);
    }

    // bước 2: tiến hành sửa
    if (isset($_POST['id'])) {
        update_cate($_POST['id'] ,$_POST['name_cate']);
        header('location: http://localhost/web17311-nhom3/admin/?list-cate');
    }

    
     
      // Lấy tất cả dữ liệu

    $dsCATE = select_cateALL();
    // var_dump($dsCATE);


   
    

    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../contents/css/style-admin.css">
    <title>Trang quản trị danh mục</title>
</head>
<body>
    <div class="main">
    <header><center><h1>Đây là trang quản trị danh mục của P-SHOP</h1></center></header>

    <div class="product">


        <div class="product-left_2">
            
               <h1>Thêm danh mục</h1>
            <hr>
            <form action="<?=ADMIN_URL?>admin-cate/list-cate.php" method="post">
                
             
                <h3>Tên danh mục</h3> 
                <input type="text" class="input_form" name="name_cate" id=""> <br>

                <input type="submit" name="inser_cate" class="input_form_2" value="Thêm vào">
    
            </form>
    
            
            
            
        </div>



        
        <div class="product-right_2">
            <table border="1" style="width:100%">
                <tr>
                    <th>Id</th>
                    <th>Tên danh mục</th>
                    <th>Quản lý</th>
                    
                </tr>
                
                    <?php 

                        foreach ($dsCATE as $value) {
                            extract($value);
                            // var_dump($value);
                            // $delete = "list-cate.php?id=".$id;
                ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><a onclick="confirm('Bạn có chắc muốn xóa?')" href="<?=ADMIN_URL?>admin-cate/list-cate.php?id=<?=$id?>" style="text-decoration: none;">Xóa</a> 

                    | <a href="http://localhost/web17311-nhom3/admin/?update-cate&id=<?=$id?>" style="text-decoration: none;">Sửa</a>
                </td>

                <?php
                      }  
                ?>
                    
            </table>
        </div>
    </div>
    
</div>

</body>
</html>