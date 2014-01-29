<?php

require_once("WidgetInterface.php");

class Ellipse implements WidgetInterface
{
    private $x;

    private $y;

    private $diameterH;

    private $diameterV;

    private $title = 'Ellipse';

    public function __construct($x, $y, $diameterH, $diameterV)
    {
        $this->x         = $x;
        $this->y         = $y;
        $this->diameterH = $diameterH;
        $this->diameterV = $diameterV;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function draw()
    {
        return sprintf(
            '%s (%d,%d) diameterH = %d diameterV = %d',
            $this->title,
            $this->x,
            $this->y,
            $this->diameterH,
            $this->diameterV
        );
    }
}