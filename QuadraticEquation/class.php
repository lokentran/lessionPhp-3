<?php 
    class QuadraticEquation {
        public $a;
        public $b;
        public $c;

        function __construct($a,$b,$c) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        function getDiscriminant() {
            $delta = ($this->b) ** 2 - 4 * ($this->a * $this->c) ;
            return $delta;
        }

        function getRoot() {
            return $this->b/(2*$this->a);
        }

        function getRoot1() {
            return (-$this->b - sqrt($this->getDiscriminant()))/(2*$this->a);
        }

        function getRoot2() {
            return (-$this->b + sqrt($this->getDiscriminant()))/(2*$this->a);
        }

    }

?>