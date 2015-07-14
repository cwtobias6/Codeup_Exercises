<?php

$test = 5;

while($test <= 15) {
	if(($test % 4 == 0) && ($test % 2 == 0)){
		echo "{$test} is divisible by 2 and 4 \n";
	} else if($test % 2 == 0) { 
		echo "{$test} is divisible by 2 \n";
	} else {
		echo "{$test} \n";
	}

	$test++;

}

?>