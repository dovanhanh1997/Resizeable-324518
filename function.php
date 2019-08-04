<?php
include_once 'Rectangle.php';
include_once 'Circle.php';


function rectangle()
{
    $rectangle = new Rectangle('Rectangle', 45, 23);
    echo 'Area before change size: '.$rectangle->getArea() . '<br>';
    $rectangle->setRandomSize();
    echo 'Random Width: '.$rectangle->getSizeOne().'<br>';
    echo 'Random Height: '.$rectangle->getSizeTwo().'<br>';
    echo 'Area after change size: '.$rectangle->getArea() . '<br>';
}

function square(){
    $square = new Square('Square', 20);

    echo 'Area before change size: '.$square->getArea().'<br>';
    $square->setRandomSize();
    echo 'Random Size: '.$square->getSizeOne().'<br>';
    echo 'Area after change size: '.$square->getArea();
}

function circle()
{
    $circle = new Square('circle', 20);

    echo 'Area before change size: ' . $circle->getArea() . '<br>';
    $circle->setRandomSize();
    echo 'Random Size: ' . $circle->getSizeOne() . '<br>';
    echo 'Area after change size: ' . $circle->getArea();
}
