<?php

    class Post extends DB{
        private $con;
        public function __construct(){
            $this->con = $this->connect();
        }

        public function add($post, $file){
            if(isset($post['submit'])){
                $description = $post['description'];
                $user = $_COOKIE['user_id'];
                if($description == ""){
                    echo "Please write your message!";
                }else{

                    if($file['photo']['size'] > 0 && $file['video']['size'] == 0){
                        $post_type = "photo";
                    }else if($file['photo']['size'] == 0 && $file['video']['size'] > 0){
                        $post_type = "video";
                    }else if($file['photo']['size'] > 0 && $file['video']['size'] > 0){
                        $post_type = "all";
                    }else{
                        $post_type = "text";
                    }
                    
                    $timestamp = date("Y-m-d H:i:s");
                    $sql = "INSERT INTO tbl_post (description, user_id, post_type_id, created_at) VALUES (:description, :user, :post_type, :timestamp)";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("description", $description, PDO::PARAM_STR);
                    $stmt->bindParam("user", $user, PDO::PARAM_INT);
                    $stmt->bindParam("post_type", $post_type, PDO::PARAM_STR);
                    $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                    $stmt->execute();

                    $post_id_sql = "SELECT id FROM tbl_post WHERE description='$description' AND user_id=$user AND post_type_id='$post_type'";
                    $post_id_stmt = $this->con->prepare($post_id_sql);
                    $post_id_stmt->execute();
                    $post_data = $post_id_stmt->fetch(PDO::FETCH_OBJ);
                    $post_id = $post_data->id;
                    
                    if($file['photo']['size'] > 0){
                        $photo_name = "POST_" . time() . "_" .$file['photo']['name'];
                        $photo_tmp_name = $file['photo']['tmp_name'];
                        $photo_upload = "photos/";
                        if(move_uploaded_file($photo_tmp_name, $photo_upload.$photo_name)){
                            $timestamp = date("Y-m-d H:i:s");
                            $photo_sql = "INSERT INTO tbl_post_photo (post_id, photo, created_at) VALUES (:post_id, :photo, :timestamp)";
                            $photo_stmt = $this->con->prepare($photo_sql);
                            $photo_stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                            $photo_stmt->bindParam("photo", $photo_name, PDO::PARAM_STR);
                            $photo_stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                            $photo_stmt->execute();
                        }
                    }

                    if($file['video']['size'] > 0){
                        $video_name = "POST_" . time() . "_" .$file['video']['name'];
                        $video_tmp_name = $file['video']['tmp_name'];
                        $video_upload = "videos/";
                        if(move_uploaded_file($video_tmp_name, $video_upload.$video_name)){
                            $timestamp = date("Y-m-d H:i:s");
                            $video_sql = "INSERT INTO tbl_post_video (post_id, video, created_at) VALUES (:post_id, :video, :timestamp)";
                            $video_stmt = $this->con->prepare($video_sql);
                            $video_stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                            $video_stmt->bindParam("video", $video_name, PDO::PARAM_STR);
                            $video_stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                            $video_stmt->execute();
                        }
                    }
                    return true;
                }
            }
        }
            
        public function show(){
            $sql = "SELECT tbl_post.id, tbl_user.first_name, tbl_user.last_name, tbl_post_photo.photo, tbl_post_video.video, tbl_post.description, tbl_post.post_type_id, tbl_user_info.profile_image FROM tbl_post INNER JOIN tbl_user ON tbl_post.user_id = tbl_user.id LEFT JOIN tbl_post_photo ON tbl_post.id = tbl_post_photo.post_id LEFT JOIN tbl_post_video ON tbl_post.id = tbl_post_video.post_id INNER JOIN tbl_user_info ON tbl_post.user_id = tbl_user_info.user_id WHERE tbl_post.deleted_at IS NULL ORDER BY tbl_post.created_at DESC;";
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
            $sql = "SELECT tbl_post.id, tbl_post.user_id, tbl_post.description, tbl_post.post_type_id, tbl_user.first_name, tbl_user.last_name FROM tbl_post INNER JOIN tbl_user ON tbl_post.user_id = tbl_user.id WHERE tbl_post.id=:id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            return $res;
        }

        public function update($get, $post, $file){
            if(isset($post['submit'])){
                $id = $get['id'];
                $description = $post['description'];
                $user = $_COOKIE['user_id'];
                if($description == ""){
                    echo "Please write your message!";
                }else{

                    if($file['photo']['size'] > 0 && $file['video']['size'] == 0){
                        $post_type = "photo";
                    }else if($file['photo']['size'] == 0 && $file['video']['size'] > 0){
                        $post_type = "video";
                    }else if($file['photo']['size'] > 0 && $file['video']['size'] > 0){
                        $post_type = "all";
                    }else{
                        $post_type = "text";
                    }
                    
                    $timestamp = date("Y-m-d H:i:s");
                    $sql = "UPDATE tbl_post SET user_id=:user, description=:description, post_type_id=:post_type, updated_at=:timestamp WHERE id=:id";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("description", $description, PDO::PARAM_STR);
                    $stmt->bindParam("user", $user, PDO::PARAM_INT);
                    $stmt->bindParam("post_type", $post_type, PDO::PARAM_STR);
                    $stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                    $stmt->bindParam("id", $id, PDO::PARAM_INT);
                    $stmt->execute();

                    $post_id_sql = "SELECT id FROM tbl_post WHERE description='$description' AND user_id=$user AND post_type_id='$post_type'";
                    $post_id_stmt = $this->con->prepare($post_id_sql);
                    $post_id_stmt->execute();
                    $post_data = $post_id_stmt->fetch(PDO::FETCH_OBJ);
                    $post_id = $post_data->id;
                    
                    if($file['photo']['size'] > 0){
                        $photo_name = "POST_" . time() . "_" .$file['photo']['name'];
                        $photo_tmp_name = $file['photo']['tmp_name'];
                        $photo_upload = "photos/";
                        if(move_uploaded_file($photo_tmp_name, $photo_upload.$photo_name)){
                            $val_photo_sql = "SELECT id FROM tbl_post_photo WHERE post_id=:post";
                            $val_photo_stmt = $this->con->prepare($val_photo_sql);
                            $val_photo_stmt->bindParam("post", $post_id, PDO::PARAM_INT);
                            $val_photo_stmt->execute();
                            $val_photo_res = $val_photo_stmt->fetch(PDO::FETCH_OBJ);
                            
                            if($val_photo_res == ""){
                                $timestamp = date("Y-m-d H:i:s");
                                $photo_sql = "INSERT INTO tbl_post_photo (post_id, photo, created_at) VALUES (:post_id, :photo, :timestamp)";
                                $photo_stmt = $this->con->prepare($photo_sql);
                                $photo_stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                                $photo_stmt->bindParam("photo", $photo_name, PDO::PARAM_STR);
                                $photo_stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                                $photo_stmt->execute();

                                $new_photo_sql = "SELECT * FROM tbl_post_photo WHERE post_id=:id";
                                $new_photo_stmt = $this->con->prepare($new_photo_sql);
                                $new_photo_stmt->bindParam("id", $id, PDO::PARAM_INT);
                                $new_photo_stmt->execute();
                            }else{
                                $timestamp = date("Y-m-d H:i:s");
                                $photo_sql = "UPDATE tbl_post_photo SET post_id=:post_id, photo=:photo, updated_at=:timestamp WHERE post_id=:id";
                                $photo_stmt = $this->con->prepare($photo_sql);
                                $photo_stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                                $photo_stmt->bindParam("photo", $photo_name, PDO::PARAM_STR);
                                $photo_stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                                $photo_stmt->bindParam("id", $id, PDO::PARAM_INT);
                                $photo_stmt->execute();

                                $new_photo_sql = "SELECT * FROM tbl_post_photo WHERE post_id=:id";
                                $new_photo_stmt = $this->con->prepare($new_photo_sql);
                                $new_photo_stmt->bindParam("id", $id, PDO::PARAM_INT);
                                $new_photo_stmt->execute();
                                $res_photo = $new_photo_stmt->fetch(PDO::FETCH_OBJ);
                                unlink('photos/'.$res_photo->photo);
                            }
                        }
                    }

                    if($file['video']['size'] > 0){
                        $video_name = "POST_" . time() . "_" .$file['video']['name'];
                        $video_tmp_name = $file['video']['tmp_name'];
                        $video_upload = "videos/";
                        if(move_uploaded_file($video_tmp_name, $video_upload.$video_name)){
                            $val_video_sql = "SELECT id FROM tbl_post_video WHERE post_id=:post";
                            $val_video_stmt = $this->con->prepare($val_video_sql);
                            $val_video_stmt->bindParam("post", $post_id, PDO::PARAM_INT);
                            $val_video_stmt->execute();
                            $val_video_res = $val_video_stmt->fetch(PDO::FETCH_OBJ);
                            
                            if($val_video_res == ""){
                                $timestamp = date("Y-m-d H:i:s");
                                $video_sql = "INSERT INTO tbl_post_video (post_id, video, created_at) VALUES (:post_id, :video, :timestamp)";
                                $video_stmt = $this->con->prepare($video_sql);
                                $video_stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                                $video_stmt->bindParam("video", $video_name, PDO::PARAM_STR);
                                $video_stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                                $video_stmt->execute();

                                $new_video_sql = "SELECT * FROM tbl_post_video WHERE post_id=:id";
                                $new_video_stmt = $this->con->prepare($new_video_sql);
                                $new_video_stmt->bindParam("id", $id, PDO::PARAM_INT);
                                $new_video_stmt->execute();
                            }else{
                                $timestamp = date("Y-m-d H:i:s");
                                $video_sql = "UPDATE tbl_post_video SET post_id=:post_id, video=:video, updated_at=:timestamp WHERE post_id=:id";
                                $video_stmt = $this->con->prepare($video_sql);
                                $video_stmt->bindParam("post_id", $post_id, PDO::PARAM_INT);
                                $video_stmt->bindParam("video", $video_name, PDO::PARAM_STR);
                                $video_stmt->bindParam("timestamp", $timestamp, PDO::PARAM_STR);
                                $video_stmt->bindParam("id", $id, PDO::PARAM_INT);
                                $video_stmt->execute();

                                $new_video_sql = "SELECT * FROM tbl_post_video WHERE post_id=:id";
                                $new_video_stmt = $this->con->prepare($new_video_sql);
                                $new_video_stmt->bindParam("id", $id, PDO::PARAM_INT);
                                $new_video_stmt->execute();
                                $res_video = $new_video_stmt->fetch(PDO::FETCH_OBJ);
                                unlink('videos/'.$res_video->video);
                            }
                        }
                    }
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