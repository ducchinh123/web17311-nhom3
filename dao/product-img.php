<?php

   // Truy vấn dữ liệu

   function select_imgAll(){
        $sql= "select * from product_img b inner join products c on b.product_id=c.id";

        return pdo_query($sql);
   }


   // Thêm mới vào bảng product_Img

   function insert_prod_img($url, $main, $product){
        $sql= "insert into product_img(url, main, product_id) values(?,?,?)";
        pdo_execute($sql, $url, $main, $product);
   }

   // Xóa bản ghi trong product_img

   function destroy_prod_img($id){
        $sql = "delete from product_img where id=?";
        pdo_execute($sql,$id);
   }


   // Lấy thông tin một mã product_img

 function get_info($id){
    $sql = "SELECT * FROM `product_img` where id=?";
    return pdo_query_one($sql,$id);
 }


   // Sửa dữ liệu trong table product_img

   function update_prod_img($url, $main, $product, $id){
        $sql = "update product_img set url=?, main=?, product_id=? where id=?";
        pdo_execute($sql, $url, $main, $product, $id);



   }

?>