<?php

require_once 'autoload.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$book = Book::findByid($id);
$book = Book::findAll();

var_dump($book);



?>

<h1><?php echo $book->title; ?></h1>
