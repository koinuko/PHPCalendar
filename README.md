A PHP script to generate a calendar (calendarbuild.php), style it (style.css), and populate it with user-defined events (events.php). Includes an example (index.php) that should work right out of the box.
Each file is commented with explanations and tips for editing certain variables or behaviors.

**events.php**
An array of user-defined events that will be displayed on the calendar. Comes with some pre-existing events; keep or discard them as desired.

**style.css**
A CSS stylesheet for the calendar. Most visual elements are editable, but bear in mind changing some of the flex and size settings might cause issues with the calendar display.
At the end of the stylesheet, the user can define and style classes for certain types of events as taken from the array in events.php

**calendarbuild.php**
PHP script that builds and populates the calendar, as styled with style.css, with events as listed in events.php. Includes several options for changing the calendar's behavior.

*$y = 2026;*
Changing this value changes the year that the calendar builds from. 

*$weekday = 2;*\
Changing this value determines if and how days of the week are displayed: As long names (Monday), shortened names (Mon), or not at all. 1 = long, 2 = shortened, 0 = not displayed.

*for ($m_cur = 1; $m_cur <= 12; $m_cur++)*\
This line can be adjusted to change the range of months displayed by the calendar.\
$m_cur = The first month you want to display, where January = 1, February = 2 ... December = 12.\
$m_cur <= The last month you want to display, same number system as above.\
By default, the calendar displays January to December of the given year (as defined by $y).

A header for each calendar month can be edited by the user. The default is displayed in the format of January 2026.

**index.php**
An example of the calendar in action. Live preview can be found at https://kyaa.fun/phpcalendar/.
