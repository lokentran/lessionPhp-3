<?php 

class Fan {
    // const SLOW = 1;
    // const MEDIUM = 2;
    // const FAST = 3;
    private $speed = 0;
    private $status = false;
    private $radius = 5;
    private $color = 'blue';

    // function __construct($speed='slow', $status, $radius, $color) {
    //     $this->speed = $speed;
    //     $this->status = false;
    //     $this->radius = 5;
    //     $this->color = 'blue';
    // }    

    function setSpeed($speed) {
        $this->speed = $speed;
    }
    function setStatus($status) {
        $this->status = $status;
    }
    function setRadius($radius) {
        $this->radius = $radius;
    }
    function setColor($color) {
        $this->color = $color;
    }

    function getSpeed() {
        return $this->speed;
    }
    function getStatus() {
        return $this->status;
    }
    function getRadius() {
        return $this->radius;
    }
    function getColor() {
        return $this->color;
    }

    function turnOn() {
        $this->setStatus(true); 
        $this->setSpeed(1);
    }

    function turnOff() {
        $this->setStatus(false); 
        $this->setSpeed(0);
    }

    function toString() {
        if($this->status) {
            return "Fan is on!" . "It has " . $this->speed . " and " . $this->color . "<br>" ;
        } else {
            return "Fan is off. " . "It has " . $this->speed . " and " . $this->color  . "<br>" ;
        }
    }

}


?>