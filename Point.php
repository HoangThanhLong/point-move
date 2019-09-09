<?php
class Point{
    public $x;
    public $y;

    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    function getX(){
        return $this->x;
    }
    function setX($x){
        $this->x = $x;
    }
    function getY(){
        return $this->y;
    }
    function setY($y){
        $this->y = $y;
    }
    function getXY(){
        $array = [];
        array_push($array, $this->getX(), $this->getY());
        return $array;
    }
    function toString(){
        echo "( ".$this->x . ", ". $this->y . ")";
        echo "<br>";
    }
}
