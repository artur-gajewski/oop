<?php

require_once(__DIR__ . '/../Widgets/Rectangle.php');
require_once(__DIR__ . '/../Widgets/Square.php');
require_once(__DIR__ . '/../Widgets/Ellipse.php');
require_once(__DIR__ . '/../Widgets/Circle.php');
require_once(__DIR__ . '/../Widgets/Textbox.php');

class WidgetTest extends PHPUnit_Framework_TestCase
{

    private $rectangle;
    private $square;
    private $ellipse;
    private $circle;
    private $textbox;

    public function __construct()
    {
        $this->rectangle = new Rectangle(10, 10, 30, 40);
        $this->square = new Square(15, 30, 35);
        $this->ellipse = new Ellipse(100, 150, 300, 200);
        $this->circle = new Circle(1, 1, 300);
        $this->textbox = new Textbox(5, 5, 200, 100, 'sample text');
    }

    public function testRectangle()
    {
        $this->assertEquals(
            $this->rectangle->draw(),
            'Rectangle (10,10) width=30 height=40'
        );
    }

    public function testSquare()
    {
        $this->assertEquals(
            $this->square->draw(),
            'Square (15,30) size=35'
        );
    }

    public function testEllipse()
    {
        $this->assertEquals(
            $this->ellipse->draw(),
            'Ellipse (100,150) diameterH = 300 diameterV = 200'
        );
    }

    public function testCircle()
    {
        $this->assertEquals(
            $this->circle->draw(),
            'Circle (1,1) size=300'
        );
    }

    public function testTextbox()
    {
        $this->assertEquals(
            $this->textbox->draw(),
            'Textbox (5,5) width=200 height=100 Text="sample text"'
        );
    }
}
