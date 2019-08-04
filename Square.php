<?php
include_once 'Shape.php';

class Square extends Shape
{
    public $size_one;

    public function __construct($name, $size_one)
    {
        parent::__construct($name);
        $this->size_one = $size_one;
    }

    public function setRandomSize()
    {
        $this->size_one = $this->resize($this->size_one);
    }

    public function getArea()
    {
        return pow($this->size_one, 2);
    }

    /**
     * @return mixed
     */
    public function getSizeOne()
    {
        return $this->size_one;
    }

}