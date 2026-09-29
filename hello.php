<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello world", "<br>";
    $age = 20;
    $grade = 50;
    echo '$grade', "<br>";
    echo "$grade","<br>";
    switch ($grade){
    case "90":
    echo "A";
    break;
    case "80":
    echo "B";
    break;
    case "70":
    echo "C";
    default: 
    echo "You are under F ";}
    
    ?>
</body>
</html>