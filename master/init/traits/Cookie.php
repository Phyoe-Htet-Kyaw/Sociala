<?php

trait Cookie{
    public function setCookie($cookie_name, $cookie_value){
        return setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
    }

    public function checkCookie(){
        if(!isset($_COOKIE['user_id'])){
            echo "<script>location.href='login.php'</script>";
        }
    }

    public function deleteCookie($cookie_name){
        setcookie($cookie_name, "", time() - 3600., "/");
        echo "<script>location.href='login.php'</script>";
    }
}

?>