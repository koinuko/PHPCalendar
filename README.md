A PHP script to generate a calendar (calendarbuild.php), style it (style.css), and populate it with user-defined events (events.php). Includes an example (index.php) that should work right out of the box.
Each file is commented with explanations and tips for editing certain variables or behaviors.

**events.php**
An array of user-defined events that will be displayed on the calendar. Comes with some pre-existing events; keep or discard them as desired.

**style.css**
A CSS stylesheet for the calendar. Most visual elements are editable, but bear in mind changing some of the flex and size settings might cause issues with the calendar display.
At the end of the stylesheet, the user can define and style classes for certain types of events as taken from the array in events.php

**calendarbuild.php**
PHP script that builds and populates the calendar, as styled with style.css, with events as listed in events.php. Includes several options for changing the calendar's behavior.

$y = 2026
Changing this value changes the year that the calendar builds from. 

$weekday = 2;
Changing this value determines if and how days of the week are displayed: As long names (Monday), shortened names (Mon), or not at all. 1 = long, 2 = shortened, 0 = not displayed.

**index.php**
An example of the calendar in action. Live preview can be found at https://kyaa.fun/phpcalendar/.
