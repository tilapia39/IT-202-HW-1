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

if(isset($_GET['number1'])){
		$number1 = $_GET['number1'];
	}
	if(isset($_GET['number2'])){
		$number2 = $_GET['number2'];
	}
	if(isset($number1) && isset($number2)){
		if(is_numeric($number1) && is_numeric($number2)){
			$number1 = (int)$number1;
			$number2 = (int)$number2;
			echo "Sum: " . ($number1 + $number2);
		}
		else{
			echo "<br> Values aren't numbers";
		}
		echo "<br>";
		echo "Concat: " . ($number1 . $number2);
	}
	if(isset($_GET['parameter'])){
		echo "<div> " . $_GET['parameter'] . "</div>";
	}



$all=$name.$number;

echo "<br>Your name and number all in one string is $all";


?>
