<?php
    spl_autoload_register(function($classes){
        $path = array(
            "master/init/classes/$classes.php",
            "master/init/traits/$classes.php",
        );
        foreach($path as $dir){
            if(file_exists($dir)){
                require_once $dir;
            }
        }
    })
?>