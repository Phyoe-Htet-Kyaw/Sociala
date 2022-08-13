<?php
    spl_autoload_register(function($classes){
        $path = array(
            "init/classes/$classes.php",
            "init/traits/$classes.php",
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