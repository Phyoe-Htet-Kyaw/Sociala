<?php

    include 'init/init.php';

    $position = new Position;
    if($position->validate($_GET)){
        if($position->delete($_GET['id'])){
            echo "<script>window.location.href='/Sociala/master/position_index.php'</script>";
        } 
    }else{
        echo "<script>window.location.href='/Sociala/master/position_index.php'</script>";
    }

?>