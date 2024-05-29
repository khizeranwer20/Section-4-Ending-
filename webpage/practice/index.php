<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: grid;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>


<?php
$greetings ="Hello";
$read=true;
if($read){

    $message ="you have read the book";
}
?>
<h1>
    <?php echo $message;?>
</h1>
    
</body>
</html>