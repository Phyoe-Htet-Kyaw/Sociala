<?php

    class Position extends DB{

        private $con;
        public function __construct(){
            $this->con = $this->connect();
        }

        public function show(){
            $sql = "SELECT * FROM tbl_position WHERE deleted_at IS NULL ORDER BY created_at DESC";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }

        public function add($post){
            if(isset($post['submit'])){
                $position = $post['position'];
                if($position == ""){
                    echo "Please Enter Position";
                }else{
                    $timestamp = date("Y-m-d H:m:s");
                    $sql = "INSERT INTO tbl_position (name, created_at) VALUES (:position, :timestamp)";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("position", $position, PDO::PARAM_STR);
                    $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                    $stmt->execute();
                    return true;
                }
            }
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
            $sql = "SELECT * FROM tbl_position WHERE id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            return $res;
        }

        public function update($get, $post){
            if(isset($post['submit'])){
                $position = $post['position'];
                $id = $get['id'];
                if($position == ""){
                    echo "<p>Please Enter Update Position!</p>";
                }else{
                    $timestamp = date("Y-m-d H:i:s");
                    $sql = "UPDATE tbl_position SET name=:position, updated_at=:timestamp WHERE id=:id";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("position", $position, PDO::PARAM_STR);
                    $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                    $stmt->bindParam("id", $id, PDO::PARAM_INT);
                    $stmt->execute();
                    return true;
                }
            }
        }

        public function delete($id){
            $timestamp = date("Y-m-d H:i:s");;
            $sql = "UPDATE tbl_position SET deleted_at=:timestamp WHERE id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }

    }

?>