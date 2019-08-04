<?php
include_once 'Interface.php';

class Shape implements Resizeable
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function resize($size)
    {
        return $size + rand(1, 100);
    }

    public function getArea()
    {
        return $this;
    }
}