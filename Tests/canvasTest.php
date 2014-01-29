<?php

require_once(__DIR__ . '/../Canvas.php');
require_once(__DIR__ . '/../Widgets/WidgetInterface.php');
require_once(__DIR__ . '/../Widgets/Rectangle.php');
require_once(__DIR__ . '/../Widgets/Square.php');
require_once(__DIR__ . '/../Widgets/Ellipse.php');
require_once(__DIR__ . '/../Widgets/Circle.php');
require_once(__DIR__ . '/../Widgets/Textbox.php');

class CanvasTest extends PHPUnit_Framework_TestCase
{
    public function testAddingSingeWidget()
    {
        $canvas = new Canvas();
        $widget = new Rectangle(10, 10, 30, 40);
        $canvas->addWidget($widget);

        $widgets = $canvas->getWidgets();
        $this->assertEquals(1, count($widgets));
    }

    public function testAddingMultipleWidgets()
    {
        $canvas = new Canvas();

        $canvas->addWidgets(
            array(
                new Rectangle(10, 10, 30, 40),
                new Square(15, 30, 35),
                new Ellipse(100, 150, 300, 200),
                new Circle(1, 1, 300),
                new Textbox(5, 5, 200, 100, 'sample text'),
            )
        );

        $widgets = $canvas->getWidgets();
        $this->assertEquals(5, count($widgets));
    }
}
