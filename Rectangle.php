<?php

class Rectangle2 implements Resizeable
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getWidth()
    {
        return $this->width;
    }

    function setWidth($width)
    {
        $this->width = $width;
    }

    function getHeight()
    {
        return $this->height;
    }

    function setHeight($height)
    {
        $this->height = $height;
    }

    function getArea()
    {
        return $this->width * $this->height;
    }

    function resize($doublePercent)
    {
        $this->width += $doublePercent;
        $this->height += $doublePercent;

        echo "Rectangle resize: ". $this->getArea();
    }
}

?>