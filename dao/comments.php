<?php
// Truy vấn danh sách comments đã nhập
// Mới lên trước

function select_commentALL(){
    $sql = "select * from comments order by id";

    return pdo_query($sql);


}


// Thêm mói comment

function insert_comment($content){
    $sql = "insert into comments(content) values(?)";
    pdo_execute($sql, $content);
}



// Xóa 

function delete_comment($id){
        
    $sql = "delete from comments where id=?";
    pdo_execute($sql, $id);

}


// Lấy thông tin một comment

function get_info_comment($id){
    $sql = "SELECT * FROM `comments` where id=?";
    return pdo_query_one($sql,$id);
 }






?>