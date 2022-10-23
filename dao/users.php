<?php

    // Truy vấn dữ liệu

    function select_all_user(){
        $sql = "select * from users";
        return pdo_query($sql);
    }

    // Thêm dữ dữ liệu

    function inser_in_user($name_user, $password, $confirm, $email, $sdt, $role){
        $sql = "insert into users(name_user, password, confirm, email, sdt, role_id) values(?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $name_user, $password, $confirm, $email, $sdt, $role);
    }

    // xóa

    function delete_user($id){
        $sql = "delete from users where id=?";
        pdo_execute($sql, $id);
    }

    // lấy dữ liệu theo mã

    function get_one_user($id){
        $sql = "select * from users where id=?";
        return pdo_query_one($sql, $id);
    }

    // Cập nhật

    function update_user($name, $email, $sdt, $role, $id){
            $sql = "update users set name_user=?, email=?, sdt=?, role_id=? where id=?";
            pdo_execute($sql, $name, $email, $sdt, $role, $id);
    }




    // Lấy user qua email

    function get_one_user_by_email($email){
        $sql = "select  * from users u join roles r on r.id = u.role_id where email = '?' ";
        return pdo_query_one($sql, $email);
    }
    

?>