<?php

echo "<pre>" . var_export($_GET, true) . "</pre>";

if(isset($_GET['name'])){
	$name = $_GET['name'];	
	echo "<br>Hello, " . $name . "<br>";
}





if(isset($_GET['number'])){
	$number = $_GET['number'];
	echo "<br>" . $number . " should be a number...";
	echo "<br>but it might not be<br>";
}


if (is_numeric($number)){
	echo var_export($number, true) . "is numeric", PHP_EOL;
	} else {
		echo var_export($number, true) . " is NOT numeric<br>", PHP_EOL;
}

$all=$name.$number;

echo "<br>Your name and number all in one string is $all";


?>
