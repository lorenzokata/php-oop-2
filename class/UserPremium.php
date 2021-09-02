<?php

class UserPremium extends User {

    public $level;
    public $sconto;

    public function __construct($_username, $_email, $_level){
        $this->level = $_level;
        parent::__construct($username, $email)
    }

    function setSconto(){
        switch ($level) {
            case 1:
                $this->sconto = 0.1;
                break;
            case 2:
                this->sconto = 0.2;
                break;
            case 3:
                this->sconto = 0.3;
                break;
        }

        $this->getSconto();
    }

    function getSconto(){
        return $this->sconto;
    }

}

?>