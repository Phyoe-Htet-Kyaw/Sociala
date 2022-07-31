<?php

    include 'init/init.php';

    $country = new Country;
    if($country->validate($_GET)){
        if($country->delete($_GET['id'])){
            echo "<script>window.location.href='/Sociala/master/country_index.php'</script>";
        } 
    }else{
        echo "<script>window.location.href='/Sociala/master/country_index.php'</script>";
    }

?>