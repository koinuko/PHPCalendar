<?php

/*

Written by Koinuko @ https://koinuko.pink
A PHP script that generates a calendar display, reads events from an array in another PHP file (events.php), and displays them on the calendar. Includes an example (index.php) Also includes a stylesheet (style.css) that can optionally display icons next to events based on their class.

The areas marked with ********** allow you to change certain variables to adjust how the calendar works.

*/
 
// ********** Change the value of $y below if you want the calendar to calculate and display dates from a different year. Default value is 2026.
$y = 2026;

/* ********** Change the value of $weekday below if you want the calendar to display days of the week as long (Monday), shortened (Mon), or not at all.
    1 = long, 2 = shortened, 0 = not displayed */
$weekday = 2;

/* 
A loop that iterates through each month in a specified range to build the calendar.
Change the variables in the for() statement below to change the selected range.

********** $m_cur = The first month you want to display, where January = 1, February = 2 ... December = 12.
********** $m_cur <= The last month you want to display, same number system as above.

ex. for ($m_cur = 2; $m_cur <= 10; $m_cur++)
This example is set to begin in February (2) and end in October (10). The actual script by default begins in January and ends in December.
*/

for ($m_cur = 1; $m_cur <= 12; $m_cur++) {
		
	// Defines variables for current month (name, # of days). Calculates how many empty boxes are needed to keep the calendar aligned. 
	$jd=gregoriantojd($m_cur,1,$y);
	$m = jdmonthname($jd,1);
	$mshort = jdmonthname($jd,0);
	$d = cal_days_in_month(CAL_GREGORIAN,$m_cur,2026);
	$blankdays = (35 - $d) % 7;	

	/* ********** Echoes a header for each month. Edit as desired. 
	Optional variables to use: 
	$m = month name (ex. January)
	$mshort = shortened month name (ex. Jan)
	$y = year
	Default is displayed as January 2026.
	ex. 
	echo "<h3>$m $y</h3><br/>"; - January 2026
	echo "<h3>$mshort. $y</h3><br/>"; - Jan. 2026
	*/
	echo "<h3>$m $y</h3><br/>";

	// Echoes a box for each day in the selected month with a date-specific id.	
	echo "<div class='month'>";
	for ($i = 0; $i < $d; $i++) {
		echo "<div class='calbox' id='";
		echo $mshort.($i+1);
		echo "'><p class='corner'>".($i+1);
		
		// Displays day of the week if enabled 
		if ($weekday == 0) {
		} else {
		    echo "<span class='dayname'> (".jddayofweek((gregoriantojd($m_cur,($i + 1),$y)),$weekday).")</span>";
		}

		// Checks if an event for this date exists in file events.php and displays it
		if (array_key_exists($mshort.($i+1), $events)) {
			echo "<br/><span class='eventinfo ";
			echo $events[$mshort.($i+1)][1];
			echo "'>";
    			echo $events[$mshort.($i+1)][0];
			echo "</span>";
		}

		echo "</p></div>";
	}

	// If selected month is not equally divisible by 7, adds extra empty boxes to keep calendar aligned.
	if ($blankdays > 0) {
		for ($i = 0; $i < $blankdays; $i++) {
		echo "<div class='emptybox' ='".$mshort."empty".($i+1)."'></div>";
		}
	}
	echo "</div><br/>";
}
?>
