<?php



// Thực hành lại video hướng dẫn của Thầy.

function get_all_categories($list_ids = []){
    $sqlQuery = "select * from categories";

    if (count($list_ids) > 0) {
        $sqlQuery.= " where id in (".implode(',', $list_ids).")";
    }

    return pdo_query($sqlQuery);
}



// Truy vấn danh sách loại đã nhập
// Mới lên trước

    

    function select_cateALL(){
        $sql = "select * from categories order by id";

        return pdo_query($sql);

  
    }





// Thêm mói loại

    function insert_cate($name){
        $sql = "insert into categories(name) values(?)";
        pdo_execute($sql, $name);
    }


// Xóa 

    function delete_cate($id){
        

        $sql2= "delete from product_size where product_id=?";
        pdo_execute($sql2, $id);

        $sql3= "delete from product_img where product_id=?";
        pdo_execute($sql3, $id);

        $sql4= "delete from sizes where product_id=?";
        pdo_execute($sql4, $id);



        $sql5= "delete from products where category_id=?";
        pdo_execute($sql5, $id);

        $sql6 = "delete from categories where id=?";
        pdo_execute($sql6, $id);

        
    }




// Lấy thông tin một mã loại

 function get_info_2($id){
    $sql = "SELECT * FROM `categories` where id=?";
    return pdo_query_one($sql,$id);
 }


 // Cập nhật dữ liệu

    function update_cate($id, $name){
        $sql = "update categories set name=? where id=?";
        pdo_execute($sql, $name, $id);

    }
?>