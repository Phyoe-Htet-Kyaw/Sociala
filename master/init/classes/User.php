<?php

    class User extends DB{
        private $con;
        public function __construct(){
            $this->con = $this->connect();
        }

        public function show(){
            $sql = "SELECT * FROM tbl_user WHERE deleted_at IS NULL ORDER BY created_at DESC;";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        public function userinfo(){
            $user = $_COOKIE['user_id'];
            $sql = "SELECT * FROM tbl_user_info WHERE user_id=:user";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("user", $user, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }
    }
?>