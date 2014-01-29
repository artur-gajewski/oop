<?php

require_once('Canvas.php');
require_once('Widgets/WidgetInterface.php');
require_once('Widgets/Rectangle.php');
require_once('Widgets/Square.php');
require_once('Widgets/Ellipse.php');
require_once('Widgets/Circle.php');
require_once('Widgets/Textbox.php');

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

echo $canvas->draw();