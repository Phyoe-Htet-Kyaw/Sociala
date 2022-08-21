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

        public function acc_detail(){
            $user = $_COOKIE['user_id'];
            $sql = "SELECT tbl_user.first_name, tbl_user.last_name, tbl_user.email, tbl_user_info.profile_image, tbl_user_info.cover_photo FROM tbl_user INNER JOIN tbl_user_info ON tbl_user.id = tbl_user_info.user_id WHERE tbl_user.id = :user";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("user", $user, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        public function userpost(){
            $user = $_COOKIE['user_id'];
            $sql = "SELECT tbl_post.id, tbl_user.first_name, tbl_user.last_name, tbl_post_photo.photo, tbl_post_video.video, tbl_post.description, tbl_post.post_type_id, tbl_user_info.profile_image FROM tbl_post INNER JOIN tbl_user ON tbl_post.user_id = tbl_user.id LEFT JOIN tbl_post_photo ON tbl_post.id = tbl_post_photo.post_id LEFT JOIN tbl_post_video ON tbl_post.id = tbl_post_video.post_id INNER JOIN tbl_user_info ON tbl_post.user_id = tbl_user_info.user_id WHERE tbl_post.user_id = :user AND tbl_post.deleted_at IS NULL";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("user", $user, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }
    }
?>