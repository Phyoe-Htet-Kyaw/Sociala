<?php

    include 'init/init.php';

    $post = new Post;
    if($post->validate($_GET)){
        if($post->delete($_GET['id'])){
            echo "<script>window.location.href='/Sociala/master/post_index.php'</script>";
        } 
    }else{
        echo "<script>window.location.href='/Sociala/master/post_index.php'</script>";
    }

?>