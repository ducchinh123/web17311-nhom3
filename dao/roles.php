<?php
    // Truy vấn nhiều dữ liệu

    function get_All(){
        $sql = "select * from roles";
        return pdo_query($sql);

    }

    // Thêm

    function insert_role($id, $name){
        $sql = "insert into roles(id, name) values(?,?)";
        pdo_execute($sql, $id, $name);

    }


    // Xóa

    function destroy_role($id){

        $removeUser = "delete from users where id=?";
        pdo_execute($removeUser, $id);

        $sql = "delete from roles where id=?";
        pdo_execute($sql, $id);
    }


    // Truy vấn dữ liệu theo 1 mã

    function get_info_role($id){
        $sql = "select * from roles where id=?";
      return  pdo_query_one($sql,$id);
    }


    // Update

    function update_role($name, $id){
        $sql = "update roles set name=? where id=?";
        pdo_execute($sql,$name,$id);

    }


?>