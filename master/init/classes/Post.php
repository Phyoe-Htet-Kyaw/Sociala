<?php

    class Post extends DB{
        private $con;
        public function __construct(){
            $this->con = $this->connect();
        }

        public function add($post){
            if(isset($post['submit'])){
                $user = $post['user'];
                $description = $post['description'];
                $post_type_id = $post['post_type'];
                if($user == "" || $description == ""){
                    echo "Please fill all informations!";
                }else{
                    $timestamp = date("Y-m-d H:i:s");
                    $sql = "INSERT INTO tbl_post (user_id, description, created_at) VALUES (:user, :description, :timestamp)";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("user", $user, PDO::PARAM_INT);
                    $stmt->bindParam("description", $description, PDO::PARAM_STR);
                    $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                    $stmt->execute();
                    return true;
                }
            }
        }

        public function show(){
            $sql = "SELECT tbl_post.id, tbl_user.first_name, tbl_user.last_name, tbl_post.description FROM tbl_post INNER JOIN tbl_user ON tbl_post.user_id = tbl_user.id WHERE tbl_post.deleted_at IS NULL ORDER BY tbl_post.created_at DESC;";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        public function validate($param){
            if(isset($param['id'])){
                if($param['id'] != ""){
                    $id = intval($param['id']);
                    if($id > 0){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        public function edit($id){
            $sql = "SELECT * FROM tbl_post WHERE id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            return $res;
        }

        public function update($get, $post){
            if(isset($post['submit'])){
                $id = $get['id'];
                $user = $post['user'];
                $description = $post['description'];
                $post_type_id = $post['post_type'];
                if($user == "" || $description == ""){
                    echo "Please Fill update informations!";
                }else{
                    $timestamp = date("Y-m-d H:i:s");
                    $sql = "UPDATE tbl_post SET user_id=:user, description=:description, updated_at=:timestamp WHERE id=:id";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("id", $id, PDO::PARAM_INT);
                    $stmt->bindParam("user", $user, PDO::PARAM_INT);
                    $stmt->bindParam("description", $description, PDO::PARAM_STR);
                    $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                    $stmt->execute();
                    return true;
                }
            }
        }

        public function delete($id){
            $timestamp = date("Y-m-d H:i:s");;
            $sql = "UPDATE tbl_post SET deleted_at=:timestamp WHERE id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }
        
    }

?>