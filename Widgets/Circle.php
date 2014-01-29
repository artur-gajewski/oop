<?php

require_once("WidgetInterface.php");

class Circle implements WidgetInterface
{
    private $x;

    private $y;

    private $size;

    private $title = 'Circle';

    public function __construct($x, $y, $size)
    {
        $this->x    = $x;
        $this->y    = $y;
        $this->size = $size;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function draw()
    {
        return sprintf(
            '%s (%d,%d) size=%d',
            $this->title,
            $this->x,
            $this->y,
            $this->size
        );
    }
}