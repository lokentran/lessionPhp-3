<?php
class Rect {
    public $width;
    public $height;
    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }

    function getArea() {
        return $this->width * $this->height;
    }

}

?>
