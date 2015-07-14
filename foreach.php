<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $key) {
	if(is_integer($key)) {
		echo "{$key}\n";
	} else if(is_float($key)) {
		echo "{$key}\n";
	} else if(is_bool($key)) {
		echo "{$key}\n";
	} else if(is_array($key)) {
		foreach ($key as $element) {
			echo "$element\n";
		}
	} else if(is_null($key)) {
		echo "{$key}\n";
	} else if(is_string($key)) {
		echo "{$key}\n";
	}
}


foreach ($things as $key) {
	if (is_scalar($key)){
		echo "\n{$key} is scalar \n";
	}
}



?>