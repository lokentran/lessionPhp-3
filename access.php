<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class Fruit {
    public $name;
    protected $color;
    private $weight;

    
    }

    $mango = new Fruit();
    $mango->name = 'Mango'; // ok
    $mango->color = 'Yellow'; // er
    $mango->weight = '300'; // er
?>
</body>
</html>