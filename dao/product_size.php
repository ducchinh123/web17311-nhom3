<?php

    // Truy vấn dữ liệu

    function select_product_size_ALL(){
        $sql = "select * from product_size";

        return pdo_query($sql);

    }

    // Thêm dữ liệu

    function insert_prod_size($prod_id, $size_id, $quantity){
        $sql = "insert into product_size(product_id, size_id, quantity) values(?,?,?)";

      return  pdo_execute($sql, $prod_id, $size_id, $quantity);

    }

    // Xóa

    function destroy_prod_size($id){
        $sql = "delete from product_size where product_id =?";
        return  pdo_execute($sql, $id);
    }


    // Truy vấn dữ liệu theo một mã prod_size

    function get_info_size($id){
        $sql = "select * from product_size where product_id =?";

       return pdo_query_one($sql, $id);
    }

    // Sửa

    function update($prod_id, $size_id, $quantity){
        $sql = "update product_size set product_id=?, size_id=?, quantity=?";

        return  pdo_execute($sql, $prod_id, $size_id, $quantity);
    }

   


?>