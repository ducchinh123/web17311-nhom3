<?php

    // Truy vấn dữ liệu

    function select_sizesALL(){

        $sql = "select * from sizes";

      return  pdo_query($sql);
    }



    // Insert dữ liệu

    function insert_sizes($name, $prod_id){
        $sql = "insert into sizes(name, product_id) values (?,?)";

        return pdo_execute($sql, $name, $prod_id);
    }


    // Xóa dữ liệu

    function destroy_sizes($id){

        $remove_prod_sizes = "delete from product_size where size_id=?";

        pdo_execute($remove_prod_sizes, $id);
      
        $sql = "delete from sizes where id=?";

        pdo_execute($sql, $id);


    }


    // Lấy dữ liệu một mã sizes

    function get_info_sizes($id){
        $sql = "select * from sizes where id=?";

      return  pdo_query_one($sql, $id);
        
    }

    // Cập nhật dữ liệu

    function update_sizes($name, $product_id){
        $sql = "update sizes set name=?, product_id=?";

        return pdo_execute($sql,$name, $product_id);
    }

?>