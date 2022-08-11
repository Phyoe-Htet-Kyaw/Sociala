<?php

    class Video extends DB{
        private $con;
        public function __construct(){
            $this->con = $this->connect();
        }

        public function add($post, $file){
            if(isset($post['submit'])){
                $video_name = "POST_" . time() . "_" .$file['video']['name'];
                $video_tmp_name = $file['video']['tmp_name'];
                $upload = "videos/";
                if(move_uploaded_file($video_tmp_name, $upload.$video_name)){
                    $post_id = $post['post'];
                    if($post_id == ""){
                        echo "Please fill all informations!";
                    }else{
                        $timestamp = date("Y-m-d H:i:s");
                        $sql = "INSERT INTO tbl_post_video (post_id, video, created_at) VALUES (:post_id, :video, :timestamp)";
                        $stmt = $this->con->prepare($sql);
                        $stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                        $stmt->bindParam("video", $video_name, PDO::PARAM_STR);
                        $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                        $stmt->execute();
                        return true;
                    }
                }
            }
        }

        public function show(){
            $sql = "SELECT * FROM tbl_post_video WHERE deleted_at IS NULL";
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
            $sql = "SELECT * FROM tbl_post_video WHERE id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            return $res;
        }

        public function update($get, $post, $file){
            if(isset($post['submit'])){
                $video_name = "POST_" . time() . "_" .$file['file']['name'];
                $video_tmp_name = $file['file']['tmp_name'];
                $upload = "videos/";
                $post_id = $post['post'];
                $id = $get['id'];
                if(move_uploaded_file($video_tmp_name, $upload.$video_name)){
                    if($post_id == ""){
                        echo "Please fill all informations!";
                    }else{
                        $sql_new = "SELECT * FROM tbl_post_video WHERE id=:id";
                        $stmt_new = $this->con->prepare($sql_new);
                        $stmt_new->bindParam("id", $id, PDO::PARAM_INT);
                        $stmt_new->execute();
                        $res_new = $stmt_new->fetch(PDO::FETCH_OBJ);
                        unlink('videos/'.$res_new->video);

                        $timestamp = date("Y-m-d H:i:s");
                        $sql = "UPDATE tbl_post_video SET post_id=:post_id, video=:video, updated_at=:timestamp WHERE id=:id";
                        $stmt = $this->con->prepare($sql);
                        $stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                        $stmt->bindParam("video", $video_name, PDO::PARAM_STR);
                        $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                        $stmt->bindParam("id", $id, PDO::PARAM_INT);
                        $stmt->execute();
                        return true;
                    }
                }else{
                    if($post_id == ""){
                        echo "Please fill all informations!";
                    }else{
                        $timestamp = date("Y-m-d H:i:s");
                        $sql = "UPDATE tbl_post_video SET post_id=:post_id, updated_at=:timestamp WHERE id=:id";
                        $stmt = $this->con->prepare($sql);
                        $stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                        $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                        $stmt->bindParam("id", $id, PDO::PARAM_INT);
                        $stmt->execute();
                        return true;
                    }
                }
            }
        }

        public function delete($id){
            $sql_new = "SELECT * FROM tbl_post_video WHERE id=:id";
            $stmt_new = $this->con->prepare($sql_new);
            $stmt_new->bindParam("id", $id, PDO::PARAM_INT);
            $stmt_new->execute();
            $res_new = $stmt_new->fetch(PDO::FETCH_OBJ);

            if(unlink('videos/' . $res_new->images)){
                echo "success";
            }else{
                echo "fail";
            }

            $timestamp = date("Y-m-d H:i:s");;
            $sql = "UPDATE tbl_post_video SET deleted_at=:timestamp WHERE id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }
        
    }


?>