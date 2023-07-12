<?php
    abstract class Shape {
        protected $name;
        abstract public function description();
    }

    interface IShape {
        public function getArea($length, $width = null, $radius = null);
        public function getPerimeter($length, $width = null, $radius = null);
    }

    //Square
        class Square extends Shape implements IShape {
            public function description() {
                return "A square has four equal sides.";
            }

            public function getArea($length, $width = null, $radius = null) {
                if ($length === $width) {
                    return $length * $length;
                } else {
                    return "Invalid: Length(x) and width(y) must be equal for a square.";
                }
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                if ($length === $width) {
                    return 4 * $length;
                } else {
                    return "Invalid: Length(x) and width(y) must be equal for a square.";
                }
            }
        }

        $shape1 = new Square();
        echo $shape1->description() . "<br>"; 
        echo $shape1->getArea(4, 4) . "<br>"; 
        echo $shape1->getArea(4, 3) . "<br>"; 
        echo $shape1->getPerimeter(4, 4) . "<br>"; 
        echo $shape1->getPerimeter(4, 3) . "<br>";

    //Rectangle
        class Rectangle extends Shape implements IShape {
            public function description() {
                return "A rectangle has two equal sides.";
            }

            public function getArea($length, $width = null, $radius = null) {
                return $length * $width;
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                return 2 * ($length + $width);
            }
        }

        $shape2 = new Rectangle();
        echo $shape2->description() . "<br>"; 
        echo $shape2->getArea(4, 6) . "<br>"; 
        echo $shape2->getPerimeter(4, 6) . "<br>";

    //Triangle
        class Triangle extends Shape implements IShape {
            public function description() {
                return "A triangle has three sides.";
            }

            public function getArea($length, $width = null, $radius = null) {
                return 0.5 * $length * $width;
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                return $length + $width + $radius;
            }
        }


        $shape3 = new Triangle();
        echo $shape3->description() . "<br>"; 
        echo $shape3->getArea(4, 6) . "<br>"; 
        echo $shape3->getPerimeter(4, 6, 7) . "<br>"; 

    //Circle
        class Circle extends Shape implements IShape {
            public function description() {
                return "Circle has no sides, only a curve.";
            }

            public function getArea($length, $width = null, $radius = null) {
                return pi() * $length * $length;
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                return 2 * pi() * $length;
            }
        }

        $shape4 = new Circle();
        echo $shape4->description() . "<br>"; 
        echo $shape4->getArea(5) . "<br>"; 
        echo $shape4->getPerimeter(5) . "<br>"; 
?>