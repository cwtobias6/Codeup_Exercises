<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {
	if(is_integer($value)) {
		echo "{$value}" . PHP_EOL;
	} else if(is_string($value)) {
		echo "{$value}" . PHP_EOL;
	} else if(is_float($value)) {
		echo "{$value}" . PHP_EOL;
	} else if(is_array($value)) {
		print_r($value) . PHP_EOL;
	} else if (is_null($value)) {
		echo "{$value}" . PHP_EOL;
	} else if (is_bool($value)) {
		echo "{$value}" . PHP_EOL;
	}
}

foreach ($things as $value) {
	if( is_scalar($value)) {
		print_r($value . PHP_EOL);
	}
}
?>