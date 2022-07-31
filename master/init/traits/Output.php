<?php

trait Output{
    public function err_msg($txt){
        return "<p class='alert alert-danger'>$txt</p>";
    }
}

?>