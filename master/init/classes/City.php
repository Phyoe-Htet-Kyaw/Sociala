<?php

    class City extends DB{
        private $con;
        public function __construct(){
            $this->con = $this->connect();
        }

        public function add($post){
            if(isset($post['submit'])){
                $city = $post['city'];
                $country = $post['country'];
                if($city == "" || $country == ""){
                    echo "Please fill all informations!";
                }else{
                    $timestamp = date("Y-m-d H:i:s");
                    $sql = "INSERT INTO tbl_city (name, country_id, created_at) VALUES (:city, :country, :timestamp)";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("city", $city, PDO::PARAM_STR);
                    $stmt->bindParam("country", $country, PDO::PARAM_INT);
                    $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                    $stmt->execute();
                    return true;
                }
            }
        }

        public function show(){
            $sql = "SELECT tbl_city.id, tbl_city.name, tbl_country.name AS country FROM tbl_city INNER JOIN tbl_country ON tbl_city.country_id = tbl_country.id WHERE tbl_city.deleted_at IS NULL ORDER BY tbl_city.name ASC;";
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
            $sql = "SELECT * FROM tbl_city WHERE id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            return $res;
        }

        public function update($get, $post){
            if(isset($post['submit'])){
                $id = $get['id'];
                $city = $post['city'];
                $country = $post['country'];
                if($city == "" || $country == ""){
                    echo "Please Fill update informations!";
                }else{
                    $timestamp = date("Y-m-d H:i:s");
                    $sql = "UPDATE tbl_city SET name=:city, country_id=:country, updated_at=:timestamp WHERE id=:id";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("id", $id, PDO::PARAM_INT);
                    $stmt->bindParam("city", $city, PDO::PARAM_STR);
                    $stmt->bindParam("country", $country, PDO::PARAM_INT);
                    $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                    $stmt->execute();
                    return true;
                }
            }
        }

        public function delete($id){
            $timestamp = date("Y-m-d H:i:s");;
            $sql = "UPDATE tbl_city SET deleted_at=:timestamp WHERE id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }
        
    }

?>