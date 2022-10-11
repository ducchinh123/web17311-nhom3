<?php

    // Truy vấn dữ liệu

    function get_ordersALL(){
        $sql = "select * from orders";
       return pdo_query($sql);
    }

    // Thêm dữ liệu

    function insert_orders($pay, $cus, $sdt, $address, $create){
        $sql = "insert into orders(payment_status, customer, sdt, address, create_at) values(?, ?, ?, ?, ?)";
        pdo_execute($sql, $pay, $cus, $sdt, $address, $create);
    }


    // Xóa

    function destroy_orders($id){
        $sql = "delete from orders where id=?";
        pdo_execute($sql, $id);
    }


    // Lấy thông tin đơn hàng theo 1 mã orders

    function get_info_order($id){
        $sql = "select * from orders where id=?";
        return  pdo_query_one($sql, $id);

    }


    // update

    function update_order($pay, $cus, $sdt, $address, $create, $id){
        $sql ="update orders set payment_status=?, customer=?, sdt=?, address=?, create_at=? where id=?";
        pdo_execute($sql, $pay, $cus, $sdt, $address, $create, $id);
    }
?>