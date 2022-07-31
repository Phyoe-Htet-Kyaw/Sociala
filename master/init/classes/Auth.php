<?php

    class Auth extends DB{
        private $con;
        public function __construct(){
            $this->con = $this->connect();
        }

        private function registerValidator($f_name, $l_name, $email, $password, $con_password){
            if($f_name == ""){
                echo "<p class='alert alert-danger'>First Name required!</p>";
                return false;
            }else{
                if($l_name == ""){
                    echo "Last Name required!";
                    return false;
                }else{
                    if($email == ""){
                        echo "Email required!";
                        return false;
                    }else{
                        if($password == ""){
                            echo "Password required!";
                            return false;
                        }else{
                            if($con_password == ""){
                                echo "Confirm Password required!";
                                return false;
                            }else{
                                if(strlen($password) < 8){
                                    echo "Password length must be greater than 8!";
                                    return false;
                                }else{
                                    if($password != $con_password){
                                        echo "Password didn't match!";
                                        return false;
                                    }else{
                                        return true;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        public function register($post){
            if(isset($post['submit'])){
                $f_name = $post['f_name'];
                $l_name = $post['l_name'];
                $email = $post['email'];
                $password = $post['password'];
                $con_password = $post['con_password'];

                $val = $this->registerValidator($f_name, $l_name, $email, $password, $con_password);

                if($val){
                    $v_user = $this->validateUser($email);
                    print_r($v_user);
                    if($v_user->count > 0){
                        echo "Already exist!";
                    }else{
                        echo "HERE";
                        $sql = "INSERT INTO tbl_user (first_name, last_name, email, password) VALUE(:first_name, :last_name, :email, :password)";
                        $stmt = $this->con->prepare($sql);
                        $stmt->bindParam("first_name", $f_name, PDO::PARAM_STR);
                        $stmt->bindParam("last_name", $l_name, PDO::PARAM_STR);
                        $stmt->bindParam("email", $email, PDO::PARAM_STR);
                        $stmt->bindParam("password", $password, PDO::PARAM_STR);
                        $stmt->execute();

                        return true;
                    }
                }
            }
        }

        private function validateUser($email){
            $sql = "SELECT COUNT(*) AS count FROM tbl_user WHERE email=:email";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            return $res;
        }
    }

?>