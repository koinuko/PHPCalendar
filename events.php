<?php

/*
Add events here. They do not need to be in calendar order as the calendar script simply searches for an existing key regardless of where it is.

Keys should be written as the first three letters of the month name with first letter capitalized, then the numerical date (no trailing zeroes or whitespace).
ex. "Jan1", "Feb14", "Dec25"

Arrays should be two strings separated by a comma. First string is the text description that will display on the calendar, and the second is the event's class, which can be styled at the end of style.css.
ex. ("Christmas Eve", "holiday") or ("John's birthday", "bday")
If not assigning a class, the second string can be left blank ("") or omitted entirely.

Make sure each entry is followed by a comma except for the last entry or the calendar will not display properly.

*/

$events = [
"Jan30" => array("Iron Lung movie release", "tv"),
"Mar10" => array("One Piece Live Action Season 2", "tv"),
"Jul1" => array("Minions 3: Mega Minions release", "tv"),
"Oct30" => array("Horror movie marathon!", "tv"),
"Feb14" => array("Valentine's Day", "holiday"),
"Feb17" => array("Lunar New Year", "holiday"),
"Feb18" => array("First day of Ramadan", "holiday"),  
"Mar14" => array("Pi Day", "holiday"),
"Sep3" => array("Return library books", "book"),
"Nov5" => array("Book Club week 1", "book"),
"Nov12" => array("Book Club week 2", "book"),
"Nov19" => array("Book Club week 3", "book"),
"Nov26" => array("Book Club week 4", "book"),
"April7" => array("Essay due :(", "book"),
"Jun12" => array("John Linnell's birthday", "bday"),
"Apr1" => array("Usopp's birthday", "bday"),
"Apr2" => array("Jinbei's birthday", "bday"),
"May5" => array("Monkey D. Luffy's birthday", "bday"),
"Dec24" => array("Tony Tony Chopper's birthday", "bday"),
"Jul3" => array("Nami's birthday", "bday"),
"Mar2" => array("Sanji's birthday", "bday"),
"Mar9" => array("Franky's birthday", "bday"),
"Apr3" => array("Brook's birthday", "bday"),
"Feb6" => array("Nico Robin's birthday", "bday"),
"Nov11" => array("Roronoa Zoro's birthday", "bday"),
"Jun11" => array("Nothing today"),
"Apr15" => array("Clean the house"),
"Jul9" => array("Dentist appointment"),
"Jan4" => array("Museum trip"),
"Jan11" => array("Bring a dish to the potluck"),
"May12" => array("Lunch at sushi restaurant"),
"Aug8" => array("Garage sale")
];

?>
