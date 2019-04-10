<?php
include "Resizeable.php";
class Circle2 implements Resizeable
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function calculaterArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function resize($doublePercent)
    {
        $this->radius += $doublePercent;
        echo "Radius resize: " . $this->calculaterArea();
    }
}

?>