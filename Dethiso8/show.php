<?php

     require "connect.php";

     // Lấy tất cả dữ liệu từ ROOM

     $sql = "SELECT * FROM `rooms` b inner join `types` c on b.type_id=c.type_id";

     $query = $connect->prepare($sql);
     $query->execute();

     $list_room = array();

     while ($room = $query->fetch(PDO::FETCH_ASSOC)) {
        array_push($list_room, $room);
     }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show tại đây</title>

     <style>

        *{
            margin: 0;
            padding: 0;
            font-family: tahoma;
            box-sizing: border-box;
        }


        .container{
            max-width: 1300px;
            margin: 0 auto;
            
        }

        table{
            width: 100%;
        }

        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;

        }

        table>tbody>tr>td>img{
            width: 100%;
            height: 100px;
        }

     </style>
</head>
<body>
    <div class="container">

    <?php 

        if(!empty($list_room)){

    ?>
        
   
             <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Room Name</th>
                            <th>Room Image</th>
                            <th>Room Intro</th>
                            <th>Room Des</th>
                            <th>Room Number</th>
                            <th>Room Price</th>
                            <th>Type Name</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>


                    <tbody>

                    <?php
                        $stt=0;
                            foreach ($list_room as $item) {
                              $stt++;
                            

                        ?>
                            <tr>
                                <td><?php echo $stt  ?></td>
                                <td><?php echo $item['room_name']  ?></td>
                                <td><img src="<?php echo $item['room_image']  ?>" alt=""></td>
                                <td><?php echo $item['room_intro']  ?></td>
                                <td><?php echo $item['room_des']  ?></td>
                                <td><?php echo $item['room_number']  ?></td>
                                <td><?php echo $item['room_price']  ?></td>
                                <td><?php echo $item['type_name']  ?></td>
                                <td><a href="insert.php">Thêm</a>  |  <a href="update.php?id=<?php echo $item['room_id']  ?>">Sửa</a>  |  <a onclick= "return confirm('Bạn có chắc muốn xóa không?')" href="delete.php?id=<?php echo $item['room_id']  ?>">Xóa</a></td>
                            </tr>

                            <?php

                            }
                                ?>
                    </tbody>
             </table>

             <?php
        }else{
            echo "Không có room";        


            ?>
  <h3><a href="insert.php">Thêm tại đây</a></h3>

<?php

        }
?>
    </div>
</body>
</html>