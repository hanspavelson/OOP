<?php

class Book{

    public $title;
    public $inStock = true;

    public function __constructor($title) {
        $this->title =$title;
    } 
    public function getStockSaldo(){
        return $this->stockSaldo;
    }
    public function setStockSaldo($v){
        if ( $v < 0 ) {
            throw new Exception('value should not be negative!');
        } else {
            $this->inStock = false;
        }
    }

    public function soldOut(){
        $this->inStock = false;
    }
}

$book = new Book("Kalevipoeg");
$book2 = new Book("Rehepapp");
$book->stockSaldo = -5;
$book2->soldOut();



var_dump($book);
var_dump($book2);
var_dump($book->getStockSaldo());

echo "\n";