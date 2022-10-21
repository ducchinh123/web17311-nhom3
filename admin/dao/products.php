<?php
function select_ALL(){
    $sql = "select * from products";

    return pdo_query($sql);
}

function select_ALL_2(){
    $sql = "select * from products";

    return pdo_query($sql);
}

function get_product_by_id($id){
    $sqlQuery = "select  * from products p inner join product_img b  on p.id=b.product_id  where p.id =$id";
    return pdo_query_one($sqlQuery);
}





// Thực hiện theo hướng dẫn của thầy

function get_products_by_cate_ids($list_ids = []){
    $sqlQuery = "select * from products";

    if (count($list_ids) > 0) {
        $sqlQuery.= " where id in (".implode(',', $list_ids).")";
    }

    return pdo_query($sqlQuery);
}


// Truy vấn danh sách loại đã nhập
// Mới lên trước


    

function select_prodALL(){
    $sql = "select * from products a inner join product_img b on a.id=b.product_id where a.category_id=1";

    return pdo_query($sql);

   

}



function select_prodALL_2(){
    $sql= "select * from product_img a inner join products b on a.product_id=b.id where b.category_id=2";

    return pdo_query($sql);

}


function select_prodALL_3(){
    $sql= "select * from product_img a inner join products b on a.product_id=b.id where b.category_id=3";

    return pdo_query($sql);

}


// Thêm mói products

function insert_prod($prod, $brand, $quan, $des, $price, $cate){
    $sql = "insert into products(name, brand, quantity, detail, price, category_id) values(?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $prod, $brand, $quan, $des, $price, $cate);
}



// Xóa 

function delete_prod($id){

    $sql_1 = "delete from product_img where product_id=?";
    pdo_execute($sql_1, $id);

    // $sql_2 = "delete from product_size where product_id=?";
    // pdo_execute($sql_2, $id);

    // $sql_3 = "delete from sizes product_id=?";
    // pdo_execute($sql_3, $id);

    $sql = "delete from products where id=?";
    pdo_execute($sql, $id);

    
}



// Lấy thông tin một mã loại

function get_info_prod($id){
    $sql = "SELECT * FROM `products` where id=?";
    return pdo_query_one($sql,$id);
 }


 // Cập nhật dữ liệu

    function update_prod($name, $brand, $quan, $des, $price, $cate, $id){
        $sql = "update products set name=?, brand=?, quantity=?, detail=?, price=?, category_id=? where id=?";
        pdo_execute($sql, $name, $brand, $quan, $des, $price, $cate, $id);

    }



?>