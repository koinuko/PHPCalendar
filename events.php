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
"Feb4" => array("Cannibal Movie Night", "tv"),
"Mar19" => array("Steel Ball Run premiere", "tv"),
"Jul1" => array("Elusive Samurai S2 this month", "tv"),
"Feb8" => array("New Samurai chapter", "book"),
"Dec10" => array("My birthday!", "bday"),
"Mar27" => array("Grant's birthday", "bday"),
"Apr2" => array("Livia's birthday", "bday"),
"May20" => array("Zoie's and Skylar's birthday", "bday"),
"Jun26" => array("Andy's birthday", "bday"),
"Nov23" => array("Brayden's birthday", "bday"),
"Dec2" => array("Ace's birthday", "bday"),
"Oct22" => array("Mads' birthday", "bday"),
"Jul14" => array("Ally's birthday", "bday"),
"Dec25" => array("Christmas", "holiday"),
"Jul1" => array("Ellie's birthday", "bday"),
"May19" => array("Gennie's birthday", "bday")

];

?>