<?php

    include 'init/init.php';

    $city = new City;
    if($city->validate($_GET)){
        if($city->delete($_GET['id'])){
            echo "<script>window.location.href='/Sociala/master/city_index.php'</script>";
        } 
    }else{
        echo "<script>window.location.href='/Sociala/master/city_index.php'</script>";
    }

?>