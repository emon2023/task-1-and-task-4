<?php

//**Task 1: Class Inheritance**


abstract class Shape {
    abstract public function getArea();
}

class Circle extends Shape {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Square extends Shape {
    public $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getArea() {
        return $this->side * $this->side;
    }
}

class Rectangle extends Shape {
    public $length;
    public $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }
}

$circle = new Circle(4);
echo 'Area of Circle : '. $circle->getArea().   '<br/>';

$square = new Square(10);
echo 'Area of Square : '. $square->getArea(). '<br/>';

$rectangle = new Rectangle(5, 9);
echo 'Area of Rectangle : '.  $rectangle->getArea(). '<br/>';
