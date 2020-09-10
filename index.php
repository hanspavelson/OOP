<?php

require_once 'autoload.php';
$list = Book::findAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raamat</title>
</head>
<body>
    <form action="edit.php" method="post">
        <input type="hidden" name="title" value="<?php echo $book"
    <?php foreach ($list as $book) {?>
        <li><a href="book.php?id=<?php echo $book->id;?>"><?php echo $book->title; ?></a></li>
        <?php } ?>

</body>
</html>
