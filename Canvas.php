<?php

require_once('Widgets/WidgetInterface.php');

class Canvas
{
    private $widgets = array();

    public function addWidget(WidgetInterface $widget)
    {
        $this->widgets[] = $widget;
    }

    public function addWidgets(array $widgets)
    {
        foreach ($widgets as $widget) {
            if ($widget instanceof WidgetInterface) {
                $this->widgets[] = $widget;
            }
        }
    }

    public function draw()
    {
        echo '----------------------------------------------------------------' . PHP_EOL;
        echo 'Current Drawing' . PHP_EOL;
        echo '----------------------------------------------------------------' . PHP_EOL;

        foreach ($this->widgets as $widget) {
            echo $widget->draw() . PHP_EOL;
        }

        echo '----------------------------------------------------------------' . PHP_EOL;
    }

}