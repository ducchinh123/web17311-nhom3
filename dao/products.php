<?php

// Truy vấn danh sách loại đã nhập
// Mới lên trước

    

function select_prodALL(){
    $sql = "select * from products order by id";

    return pdo_query($sql);


}


// Thêm mói products

function insert_prod($prod, $brand, $quan, $des, $price){
    $sql = "insert into products(name,brand,quantity,detail,pricez) values(?,?,?,?,?)";
    pdo_execute($sql, $prod, $brand, $quan, $des, $price);
}



// Xóa 

function delete_prod($id){
    
    $sql = "delete from products where id=?";
    pdo_execute($sql, $id);

    
}



// Lấy thông tin một mã loại

function get_info_prod($id){
    $sql = "SELECT * FROM `products` where id=?";
    return pdo_query_one($sql,$id);
 }


 // Cập nhật dữ liệu

    function update_prod($id, $name, $brand, $quan, $des, $price){
        $sql = "update products set name=?, brand=?, quantity=?, detail=?, price=? where id=?";
        pdo_execute($sql, $name, $brand, $quan, $des, $price, $id);

    }



?>