A PHP script to generate a calendar (calendarbuild.php), style it (style.css), and populate it with user-defined events (events.php). Includes an example (index.php) that should work right out of the box.
Each file is commented with explanations and tips for editing certain variables or behaviors.

[b]events.php[/b]
An array of user-defined events that will be displayed on the calendar. Comes with some pre-existing events; keep or discard them as desired.

[b]style.css[/b]
A CSS stylesheet for the calendar. Most visual elements are editable, but bear in mind changing some of the flex and size settings might cause issues with the calendar display.
At the end of the stylesheet, the user can define and style classes for certain types of events as taken from the array in events.php

[b]index.php[/b]
An example of the calendar in action. Live preview can be found at https://kyaa.fun/phpcalendar/.
