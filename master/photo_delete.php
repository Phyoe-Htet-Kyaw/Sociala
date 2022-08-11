<?php

    include 'init/init.php';

    $photo = new Photo;
    if($photo->validate($_GET)){
        if($photo->delete($_GET['id'])){
            echo "<script>window.location.href='/Sociala/master/photo_index.php'</script>";
        } 
    }else{
        echo "<script>window.location.href='/Sociala/master/photo_index.php'</script>";
    }

?>