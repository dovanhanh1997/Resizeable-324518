<?php
include_once 'Shape.php';

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function setRandomSize()
    {
        $this->radius = $this->resize($this->getRadius());
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
