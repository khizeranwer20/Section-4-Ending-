<?php

$books=[
    'chemistry',
    'physics',
    'Maths',
];

$book=[
    [
        "name"=>"mohsin",
        "age"=>"22",
    ],

    [
        "name"=>"ali",
        "age"=>"25",
    ]
    ];
// print_r($books);
    //   echo $books[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($book as $value){ ?>
        <li><?php echo $value["name"];?></li>
        <?php   }  ?>
            </ul>
</body>
</html>