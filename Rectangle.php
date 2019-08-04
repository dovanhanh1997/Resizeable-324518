<?php
include_once 'Square.php';

class Rectangle extends Square
{
    public $size_two;

    public function __construct($name, $size_one, $size_two)
    {
        parent::__construct($name, $size_one);
        $this->size_two = $size_two;
    }

    public function setRandomSize()
    {
        parent::setRandomSize(); // TODO: Change the autogenerated stub
        $this->size_two = $this->resize($this->size_two);
    }

    public function getArea()
    {
        return $this->size_one * $this->size_two;
    }

    /**
     * @return mixed
     */
    public function getSizeTwo()
    {
        return $this->size_two;
    }
}