<?php

require_once("WidgetInterface.php");

class Textbox implements WidgetInterface
{
    private $x;

    private $y;

    private $width;

    private $height;

    private $text;

    private $title = 'Textbox';

    public function __construct($x, $y, $width, $height, $text)
    {
        $this->x      = $x;
        $this->y      = $y;
        $this->width  = $width;
        $this->height = $height;
        $this->text   = $text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function draw()
    {
        return sprintf(
            '%s (%d,%d) width=%d height=%d Text="%s"',
            $this->title,
            $this->x,
            $this->y,
            $this->width,
            $this->height,
            $this->text
        );
    }
}