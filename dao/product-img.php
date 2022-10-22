<?php



   // Truy vấn dữ liệu

   function select_imgAll(){
        $sql= "select *  from product_img";

        return pdo_query($sql);

   }




   // Thêm mới vào bảng product_Img

   function insert_prod_img($url, $main, $product, $url_2, $url_3){
        $sql= "insert into product_img(url, main, product_id, url_2, url_3) values(?,?,?,?,?)";
        pdo_execute($sql, $url, $main, $product, $url_2, $url_3);
   }

   // Xóa bản ghi trong product_img

   function destroy_prod_img($id){
        $sql = "delete from product_img where id=?";
        pdo_execute($sql,$id);
   }


     // Xóa ảnh trong product_img theo mục đích

     function destroy_img($id){
          $sql = "delete url, main, url_2, url_3 from product_img where id=?";
          pdo_execute($sql,$id);
     }


   // Lấy thông tin một mã product_img

 function get_info($id){
    $sql = "SELECT * FROM `product_img` where id=?";
    return pdo_query_one($sql,$id);
 }


   
   // Sửa dữ liệu trong table product_img

   function update_prod_img($url, $main, $url_2, $url_3, $id){
     $sql = "update product_img set url=?, main=?,url_2=?, url_3=?  where id=?";
     pdo_execute($sql, $url, $main,$url_2, $url_3, $id);



}






// // lấy id product

// function get_info_id_prod($id){
//      $sql= "select product_id from product_img where product_id=?";

//      return pdo_query_one($sql, $id);

// }



// lấy từ bảng product_img và bảng products


function get_product_img_products(){
     $sql= "select product_img.id, product_img.main, product_img.url, product_img.url_2, product_img.url_3, product_img.product_id, products.name
       from product_img , products   where product_img.product_id=products.id";

     return pdo_query($sql);

}


?>