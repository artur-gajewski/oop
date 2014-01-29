<?php

require_once("WidgetInterface.php");

class Rectangle implements WidgetInterface
{
    private $x;

    private $y;

    private $width;

    private $height;

    private $title = 'Rectangle';

    public function __construct($x, $y, $width, $height)
    {
        $this->x      = $x;
        $this->y      = $y;
        $this->width  = $width;
        $this->height = $height;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function draw()
    {
        echo sprintf(
            '%s (%d,%d) width=%d height=%d',
            $this->title,
            $this->x,
            $this->y,
            $this->width,
            $this->height
        );
    }
}