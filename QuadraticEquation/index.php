<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <input type="number" name="a" placeholder="a">
    <input type="number" name="b" placeholder="b">
    <input type="number" name="c" placeholder="c">
    <input type="submit"  value="Tim nghiem">
</form>

<?php
    include('class.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // echo "$a $b $c";

        $phuongtrinh = new QuadraticEquation($a,$b,$c); 
       


        if($a != 0) {
            if($phuongtrinh->getDiscriminant() < 0 ) {
                echo "Phuong trinh vo nghiem";
            } else if($phuongtrinh->getDiscriminant() == 0) {
                echo "Phuong trinh co 1 nghiem duy nhat la x = " . $phuongtrinh->getRoot() ;
            } else {
                echo "Phuong trinh co 2 nghiem la x1 =" . $phuongtrinh->getRoot1() . "; x2 =". $phuongtrinh->getRoot2();  
            }
        } else {
            echo "Ban dang giai phuong trinh bac nhat";
        }
  

    }
?>

</body>
</html>

