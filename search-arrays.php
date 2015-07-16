<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$person = 'bill';


function searching($person, $names) {
	$personFound = array_search($person, $names);
	if($personFound === 0) {
		return true . PHP_EOL;
	} else if ($personFound) {
		return true . PHP_EOL;
	}else {
		return false . PHP_EOL;
	}
}

echo searching($person, $names);
