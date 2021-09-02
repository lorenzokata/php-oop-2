<?php

class Product {
    
    public $product_name;
    public $description;

    public function __construct($_product_name){
        $this->product_name = $_product_name;
    }

    function setDescription($_description){
        $this->description = $_description;
        $this->getDescription();
    }

    function getDescription(){
        return $this->description;
    }

}

?>