<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$person = 'Billy';

//part 1
function searching($person, $people) {
	$personFound = array_search($person, $people);
	if($personFound === 0) {
		return true . PHP_EOL;
	} else if ($personFound) {
		return true . PHP_EOL;
	} else {
		return false . PHP_EOL;
	}
}

 echo searching($person, $names) . PHP_EOL;

//part 2

function inCommon($array1,$array2){
	$commonValues = array_intersect($array1,$array2);
	return count($commonValues) . PHP_EOL;
}

echo inCommon($names,$compare) . PHP_EOL;

//part 2 the right way
function wasInCommon($array1,$array2) {
	$counter = 0;
	foreach($array1 as $key => $value) {
		$matched = array_search($value,$array2);
		if($matched !== false) {
			$counter++;
		} 
	}
	return $counter . PHP_EOL;
}

echo wasInCommon($names,$compare);
