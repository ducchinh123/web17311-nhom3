<?php
  require "connect.php";

  $id = (int) $_GET['id'];

  // Lấy danh mục 

  $sql = "SELECT * FROM `types`";

  $query = $connect->prepare($sql);

  $query->execute();

  $list_type = array();

  while ($type = $query->fetch(PDO::FETCH_ASSOC)) {
    array_push($list_type, $type);
  }


   // Lấy tất cả dữ liệu từ ROOM

   $sql = "SELECT * FROM `rooms` b inner join `types` c on b.type_id=c.type_id";

   $query = $connect->prepare($sql);
   $query->execute();

   $list_room = array();

   while ($room = $query->fetch(PDO::FETCH_ASSOC)) {
      array_push($list_room, $room);
   }


   // Lấy phần tử cần xóa

   foreach ($list_room as $room) {
    if($room['room_id'] == $id){
        $up_room = $room;
    }
   }


  if(isset($_POST['save'])){
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $des = $_POST['des'];
        $type = $_POST['type'];


       


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

        if(!empty(!empty($title) && !empty($intro) && !empty($des) && !empty($number) && !empty($price) && !empty($type))){
            
            // Thực hiện insert

            $sql = "UPDATE `rooms` SET `room_name` = '{$title}', `room_intro` = '{$intro}', `room_des` = '{$des}', `room_number` = '{$number}', `room_price` = '{$price}', `type_id` = '{$type}' WHERE `rooms`.`room_id` = {$id}";

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
        margin-left: 100px;
    }

    .input{
        width: 300px;
        padding: 5px 109px;
    }
    
    .input2{
        border: 1px solid black;
        width: 300px;
        padding: 5px 109px;
    }



    .type{
        width: 300px;
        padding: 5px 109px;
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
                    <input class="input" type="text" name="title" value="<?php echo $up_room['room_name']  ?>"> <br>

                  

                    Room Intro <br>
                    <input class="input" type="text" name="intro" value="<?php echo $up_room['room_intro']  ?>"> <br>

                    Room Description <br>
                    <input class="input" type="text" name="des" value="<?php echo $up_room['room_des']   ?>"> <br>

                    Room Number <br>
                    <input class="input" type="number" name="number" value="<?php echo $up_room['room_number']  ?>"> <br>
                    <p style="color: red;"><?php if(!empty($error['number'])) echo $error['number']   ?></p><br>
                    
                    Room Price <br>
                    <input class="input" type="number" name="price" value="<?php echo $up_room['room_price']  ?>"> <br>
                    <p style="color: red;"><?php if(!empty($error['price'])) echo $error['price']   ?></p><br>

                    TYPE ID <br>

                    <select class="type" name="type" id="" value="">

                            <?php
                foreach ($list_type as $type) {
                    
                
                            ?>
                            <option value="<?php  echo $type['type_id']  ?>"><?php  echo $type['type_name']  ?></option>

                            <?php
                }
                            ?>
                    </select>

                    <br>
                    <br>
                    <br>
                    <br>

                    <br>
                    <input type="submit" name="save" value="Lưu lại">
                    
            </form>
    </div>
</body>
</html>