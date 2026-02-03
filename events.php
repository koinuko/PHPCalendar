<?php

/*
Add events here. They do not need to be in calendar order as the calendar script simply searches for an existing key regardless of where it is.

Keys should be written as the first three letters of the month name with first letter capitalized, then the numerical date (no trailing zeroes or whitespace).
ex. "Jan1", "Feb14", "Dec25"

Arrays should be two strings separated by a comma. First string is the text description that will display on the calendar, and the second is the event's class, which can be styled at the end of style.css.
ex. ("Christmas Eve", "holiday") or ("John's birthday", "bday")

Make sure each entry is followed by a comma except for the last entry or the calendar will not display properly.

*/

$events = [
"Jan30" => array("Iron Lung movie release", "tv"),
"Feb14" => array("Valentine's Day", "holiday"),
"Dec25" => array("Christmas", "holiday"),
"Jul1" => array("Minions 3: Mega Minions release", "tv")

];

?>
