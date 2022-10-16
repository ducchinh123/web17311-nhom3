<?php
      require "dao/pdo.php";
      require "dao/comments.php";

        // Xóa 

        if (isset($_GET['id'])) {
            delete_comment($_GET['id']);
        }



     // Show

     $dscomment = select_commentALL();

     // var_dump($dscate);
 
     foreach ($dscomment as $comment) {
        extract($comment);
        $delete = "demo_comment.php?id=".$id;
        $update = "update.php?id=".$id;
        echo '<li><a href="#">'.$content.'</a>  -> <a href="'.$delete.'">Delete</a></li>';
     }
    
    


?>
