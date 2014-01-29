Object Oriented Programming Exercise
===

Installation and running the app
--------------------------------

- clone repository
- Go to your newly created folder
- run following command:

$ php index.php

Testing
--------

- run 'phpunit' in root folder, PHPUnit required

About the app
-------------

This is an exercise to demonstrate object oriented principles. This practice uses imaginary canvas to draw widgets on it.

There are five different widgets:

- Rectangle
- Square
- Ellipse
- Circle
- Textbox

A Canvas class is the class that holds the array of widgets added and a command to draw the outcome into it.

A WidgetInterface class contains a rule of what each of implemented widgets has to contain at least in order to be implemented. In this case, draw() function is a must for Canvas object to work properly.

Once the index.php file is run, it will go through all widgets added to the canvas and draw the configured outcome:

~~~
----------------------------------------------------------------
Current Drawing
----------------------------------------------------------------
Rectangle (10,10) width=30 height=40
Square (15,30) size=35
Ellipse (100,150) diameterH = 300 diameterV = 200
Circle (1,1) size=300
Textbox (5,5) width=200 height=100 Text="sample text"
----------------------------------------------------------------
~~~
