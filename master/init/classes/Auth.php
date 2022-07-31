<?php

class Auth extends DB{

    use Output, Cookie;

    private $con;
    public function __construct(){
        $this->con = $this->connect();
    }

    public function register($post){
        if(isset($post['submit'])){
            $f_name = htmlspecialchars($post['f_name']);
            $l_name = htmlspecialchars($post['l_name']);
            $email = htmlspecialchars($post['email']);
            $password = htmlspecialchars($post['password']);
            $con_password = htmlspecialchars($post['con_password']);

            $val = $this->registerValidator($f_name, $l_name, $email, $password, $con_password);

            if($val){
                $v_user = $this->validateUser($email);
                if($v_user->count > 0){
                    echo $this->err_msg("Email Already exist!");
                }else{
                    $crypted_pw =password_hash($password, PASSWORD_BCRYPT);
                    $sql = "INSERT INTO tbl_user (first_name, last_name, email, password) VALUE(:first_name, :last_name, :email, :password)";
                    $stmt = $this->con->prepare($sql);
                    $stmt->bindParam("first_name", $f_name, PDO::PARAM_STR);
                    $stmt->bindParam("last_name", $l_name, PDO::PARAM_STR);
                    $stmt->bindParam("email", $email, PDO::PARAM_STR);
                    $stmt->bindParam("password", $crypted_pw, PDO::PARAM_STR);
                    $stmt->execute();

                    $user = $this->getUserId($email);
                    $this->setCookie("user_id", $user->id);
                    return true;
                }
            }
        }
    }

    public function login($post){
        if(isset($post['submit'])){
            $email = htmlspecialchars($post['email']);
            $password = htmlspecialchars($post['password']);

            $val = $this->loginValidator($email, $password);

            if($val){
                $user = $this->getUserId($email);
                $this->setCookie("user_id", $user->id);
                return true;
            }
        }
    }

    private function registerValidator($f_name, $l_name, $email, $password, $con_password){
        if($f_name == ""){
            echo $this->err_msg("First Name required!");
            return false;
        }else{
            if($l_name == ""){
                echo $this->err_msg("Last Name required!");
                return false;
            }else{
                if($email == ""){
                    echo $this->err_msg("Email required!");
                    return false;
                }else{
                    if($password == ""){
                        echo $this->err_msg("Password required!");
                        return false;
                    }else{
                        if($con_password == ""){
                            echo $this->err_msg("Confirm Password required!");
                            return false;
                        }else{
                            if(strlen($password) < 8){
                                echo $this->err_msg("Password length must be greater than 8!");
                                return false;
                            }else{
                                if($password != $con_password){
                                    echo $this->err_msg("Password didn't match!");
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

    private function loginValidator($email, $password){
        if($email == ""){
            echo $this->err_msg("Email required!");
            return false;
        }else{
            if($password == ""){
                echo $this->err_msg("Password required!");
                return false;
            }else{
                if(strlen($password) < 8){
                    echo $this->err_msg("Password length must be greater than 8!");
                    return false;
                }else{
                    $user = $this->getUserEmailPw($email);
                    if(!$user){
                        echo $this->err_msg("Email and Password is Invalid!");
                    }else{
                        if($user->email != $email){
                            echo $this->err_msg("Email is Invalid!");
                            return false;
                        }else{
                            if(!password_verify($password, $user->password)){
                                echo $this->err_msg("Password is Invalid!");
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

    private function getUserEmailPw($email){
        $sql = "SELECT email, password FROM tbl_user WHERE email=:email";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    private function getUserId($email){
        $sql = "SELECT id FROM tbl_user WHERE email=:email";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_OBJ);
        return $res;
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