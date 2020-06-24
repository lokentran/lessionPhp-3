<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    include('class.php');
    
    $fan = new Fan();

    $fan->setColor("red");
    
    $fan->turnOn();

    echo $fan->toString();

    $fan->turnOff();
    echo $fan->toString();
    
?> 

</body>
</html>