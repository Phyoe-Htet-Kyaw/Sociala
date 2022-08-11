<?php

    include 'init/init.php';

    $video = new Video;
    if($video->validate($_GET)){
        if($video->delete($_GET['id'])){
            echo "<script>window.location.href='/Sociala/master/video_index.php'</script>";
        } 
    }else{
        echo "<script>window.location.href='/Sociala/master/video_index.php'</script>";
    }

?>