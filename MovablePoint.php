<?php
class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    function getXSpeed(){
        return $this->xSpeed;
    }
    function getYSpeed(){
        return $this->ySpeed;
    }
    function setSpeed($xSpeed, $ySpeed){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    function getSpeed(){
        $array = [];
        array_push($array,$this->xSpeed, $this->ySpeed);
        return $array;
    }
    function toString()
    {
        parent::toString(); // TODO: Change the autogenerated stub
        echo "speed: = ( " . $this->xSpeed .",". $this->ySpeed . " )";
    }

    function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this->x ." ". $this->y;
    }
}