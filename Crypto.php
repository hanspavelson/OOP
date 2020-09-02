<?php

class Crypto{

    public $title;

    public function __construct($title) {
        $this->title =$title;
    } 

}

$Crypto = new Crypto("Chainlink");
$Crypto2 = new Crypto("Bitcoin");
$Crypto3 = new Crypto("Axion/Hex2t");


var_dump($Crypto->title);
var_dump($Crypto2->title);
var_dump($Crypto3->title);


echo "\n";