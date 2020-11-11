<?php
include_once ("Circle.php");
include_once ("Cylinder.php");
include_once ("Rectangle.php");
include_once ("Square.php");
$circle=new Circle("Circle 01",3);
echo "Circle Area:".$circle->caculateArea()."<br>";
echo "Circle Perimerter:".$circle->caculatePerimeter()."<br>";
$cylinder=new Cylinder("Cylinder 01",4,5);
echo "Cylinder Area:".$cylinder->caculateArea()."<br>";
echo "Cylinder Perimeter:".$cylinder->caculatePerimeter()."<br>";
$rectangle = new Rectangle("Rectangle 01",5,4);
echo "Rectangle Area:".$rectangle->caculateArea()."<br>";
echo "Rectangle Perimeter:".$rectangle->caculatePerimerter()."<br>";
$square=new Square("Square 01",10,10,10);
echo "Rectangle Area:".$square->caculateArea()."<br>";
echo "Rectangle Perimeter:".$square->caculatePerimerter()."<br>";
