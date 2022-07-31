<?php
    include 'master/init/init.php';
    $auth = new Auth;
    $auth->deleteCookie("user_id");
?>