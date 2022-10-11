<?php
    // Truy vấn dữ liêu (lấy tất cả)

    function get_allORDER(){
        $sql = "select * from order_detail";
        return pdo_query($sql);
    }

    // Thêm dữ liệu

    function insert_order_detail( $size, $quan, $price, $order, $product){
        $sql = "insert into order_detail(size_id, quantity, unit_price, order_id, product_id) values(?, ?, ?, ?, ?)";
        pdo_execute($sql, $size, $quan, $price, $order, $product);
    }

    // Xóa


    function destroy_order_detail($id){
        $sql = "delete from order_detail where id=?";
        pdo_execute($sql, $id);
    }

    // Lấy thông tin

    function get_info_detail($id){
        $sql = "select * from order_detail where id=?";
        return pdo_query_one($sql,$id);
    }

    // update

    function update_detail($size, $quan, $price, $order, $prod, $id){
        $sql = "update order_detail set size_id=?, quantity=?, unit_price=?, order_id=?, product_id=? where id=?";
        pdo_execute($sql, $size, $quan, $price, $order, $prod, $id);
    }

?>