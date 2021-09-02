<?php

class User {
    
    public $username;
    public $email;

    public function __construct($_username, $_email){
        $this->username = $_username;
        $this->email = $_email;
    }

}

?>