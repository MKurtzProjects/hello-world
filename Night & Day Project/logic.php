<?php
date_default_timezone_set('America/New_York');

    $day_name = date('l');
	$day_numeric = date('d');
	$month = date('F');
	$year = date('Y');
	
	$hour = date('g');
	$minute = date('i');
	$time_label = date('a');
	//$hour_24 is not displayed to users, is a 24 hour clock that let's me write easier if statements.  See below.
	$hour_24 = date ('G');

	$color = "#374D61";

	if ($hour_24 >= 6 AND $hour_24 <=18) {
		$color = "#91CBFF";
		return $color;
	}
