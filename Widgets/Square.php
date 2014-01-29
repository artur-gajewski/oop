<?php

require_once("WidgetInterface.php");

class Square implements WidgetInterface
{
    private $x;

    private $y;

    private $size;

    private $title = 'Square';

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
        echo sprintf(
            '%s (%d,%d) size=%d',
            $this->title,
            $this->x,
            $this->y,
            $this->size
        );
    }
}