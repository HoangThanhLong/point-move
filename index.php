<?php
include "Point.php";
include "MovablePoint.php";

$point = new Point(5,10);
$point->toString();
echo "<br>";
$movePoint = new MovablePoint(5,10,15,20);
$movePoint->toString();
echo "<br>";
echo $movePoint->move();