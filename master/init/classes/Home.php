<?php

class Home extends DB{

    use Cookie;

    private $con;
    public function __construct(){
        $this->con = $this->connect();
        $this->checkCookie();
    }

}

?>