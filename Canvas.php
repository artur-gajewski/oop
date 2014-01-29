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

    public function getWidgets()
    {
        return $this->widgets;
    }

    public function draw()
    {
        $output = '----------------------------------------------------------------' . PHP_EOL;
        $output .= 'Current Drawing' . PHP_EOL;
        $output .= '----------------------------------------------------------------' . PHP_EOL;

        foreach ($this->widgets as $widget) {
            $output .= $widget->draw() . PHP_EOL;
        }

        $output .= '----------------------------------------------------------------' . PHP_EOL;

        return $output;
    }

}