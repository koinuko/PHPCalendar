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
"Feb18" => array("First day of Ramadan", "holiday"),  
"Jul1" => array("Minions 3: Mega Minions release", "tv"),
"Nov5" => array("Book Club week 1", "book"),
"Nov12" => array("Book Club week 2", "book"),
"Nov19" => array("Book Club week 3", "book"),
"Nov26" => array("Book Club week 4", "book"),
"Jun12" => array("John Linnell's birthday", "bday")  
];

?>
