<?php
  require "connect.php";

  // Lấy danh mục 

  $sql = "SELECT * FROM `types`";

  $query = $connect->prepare($sql);

  $query->execute();

  $list_type = array();

  while ($type = $query->fetch(PDO::FETCH_ASSOC)) {
    array_push($list_type, $type);
  }


  if(isset($_POST['save'])){

        if(empty($_POST['title'])){

            $error['title'] = "Tên phòng không được trống";

        }else{
            $title = $_POST['title'];
        }



        if(empty($_POST['intro'])){

            $error['intro'] = "Giới thiệu phòng không được trống";

        }else{
            $intro = $_POST['intro'];
        }



        if(empty($_POST['des'])){

            $error['des'] = "Chi tiết phòng không được trống";

        }else{
            $des = $_POST['des'];
        }



        if(empty($_POST['type'])){

            $error['type'] = "Loại phòng không được trống";

        }else{
            $type = $_POST['type'];
        }



        // $title = $_POST['title'];
        // $intro = $_POST['intro'];   
        // $des = $_POST['des'];
        // $type = $_POST['type'];


        $type_img = array('jpg', 'png');
        $check_type = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);


        if(!in_array($check_type, $type_img)){
            $error['image'] = "Ảnh không đúng định dạng";

        }elseif($_FILES['image']['size']>1024*1024*2){
            $error['image'] = "Kích thước ảnh không quá 2mb";
        }else{
            $up_dir = "uploads/";
            $up_file = $up_dir.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $up_file);
            $image = $up_file;
        }


        if($_POST['number'] <=0 ){
            $error['number'] = "Số phòng phải dương";

        }else{
            $number = $_POST['number'];
        }


        if($_POST['price'] <=0 ){
            $error['price'] = "Giá phòng phải dương";

        }else{
            $price = $_POST['price'];
        }

        if(!empty(!empty($title) && !empty($image) && !empty($intro) && !empty($des) && !empty($number) && !empty($price) && !empty($type))){
            
            // Thực hiện insert

            $sql = "INSERT INTO `rooms` (`room_id`, `room_name`, `room_image`, `room_intro`, `room_des`, `room_number`, `room_price`, `type_id`) VALUES (NULL, '{$title}', '{$image}', '{$intro}', '{$des}', '{$number}', '{$price}', '{$type}')";

            $query = $connect->prepare($sql);
            $connect->exec($sql);

            if($connect){
                // echo "Thêm thành công";
                header('location: show.php');

            }
        }
  }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Room tại đây</title>

<style>
    *{
        margin: 0;
        padding: 0;
        font-family: tahoma;
        box-sizing: border-box;
    }


    .container{
        max-width: 500px;
        margin: 0 auto;
        border: 1px solid greenyellow;
    }

    form{
        margin: 0 auto;
        margin-left: 100px;
    }

    .input{
        width: 300px;
        padding: 5px 10px;
    }
    
    .input2{
        border: 1px solid black;
        width: 300px;
        padding: 5px 10px;
    }



    .type{
        width: 300px;
        padding: 5px 10px;
    }

    .submit{
        margin-left: 100px;
        padding: 5px 10px;
    }


</style>
</head>
<body>
    <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                    <h2>Thêm tại đây</h2>
                    <br>
                    <br>
                    Room Name <br>
                    <input class="input" type="text" name="title" value="<?php if(!empty($title)) echo $title  ?>"> <br>
                    <p style="color: red;"><?php if(!empty($error['title'])) echo $error['title']   ?></p><br>

                    Room Image <br>
                    <input class="input2" type="file" name="image" value="<?php if(!empty($image)) echo $image   ?>"> <br>
                    <p style="color: red;"><?php if(!empty($error['image'])) echo $error['image']   ?></p> <br>

                    Room Intro <br>
                    <input class="input" type="text" name="intro" value="<?php if(!empty($intro)) echo $intro  ?>"> <br>
                    <p style="color: red;"><?php if(!empty($error['intro'])) echo $error['intro']   ?></p><br>

                    Room Description <br>
                    <input class="input" type="text" name="des" value="<?php if(!empty($des)) echo $des   ?>"> <br>
                    <p style="color: red;"><?php if(!empty($error['des'])) echo $error['des']   ?></p><br>

                    Room Number <br>
                    <input class="input" type="number" name="number" value="<?php if(!empty($number)) echo $number  ?>"> <br>
                    <p style="color: red;"><?php if(!empty($error['number'])) echo $error['number']   ?></p><br>
                    
                    Room Price <br>
                    <input class="input" type="number" name="price" value="<?php if(!empty($price)) echo $price   ?>"> <br>
                    <p style="color: red;"><?php if(!empty($error['price'])) echo $error['price']   ?></p><br>

                    TYPE ID <br>

                    <select class="type" name="type" id="">

                            <?php
                foreach ($list_type as $type) {
                    
                
                            ?>
                            <option value="<?php  echo $type['type_id']  ?>"><?php  echo $type['type_name']  ?></option>

                            <?php
                }
                            ?>
                    </select>

                    <br>
                    <p style="color: red;"><?php if(!empty($error['type'])) echo $error['type']   ?></p><br>
                    <br>

                    <br>
                    <br>

                    <br>
                    <input class="submit" type="submit" name="save" value="Lưu lại">
                    
            </form>
    </div>
</body>
</html>