<?php
class Users extends CI_Model
{
    public function insertUser($fio, $email, $login, $password, $avatar) {
        $sql = "INSERT INTO `users`( `fio`, `email`, `login`, `password`, `avatar`) VALUES (?,?,?,?,?)";
        $result = $this ->db -> query($sql, array($fio, $email, $login, $password, $avatar));
        return $result;
    }

    public function selectUser($login, $password) {
        $sql = "SELECT * FROM users WHERE login = ? AND password = ?";
        $result = $this -> db -> query($sql, array($login, $password));
        return $result -> result_array();
    }

    public function selectUserInfo($id_user){
        $sql = "SELECT * FROM users WHERE id_user = $id_user";
        $result = $this ->  db -> query($sql);
        return $result -> result_array();
    }
}
?>