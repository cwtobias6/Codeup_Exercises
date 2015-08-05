<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael','Dana','Mike'];


function isFound($person, $array) {
	$isThere = array_search($person, $array);
		if ($isThere || $isThere === 0) {
			echo true;
		} else {
			echo false;
		}
}

function compare($array1,$array2) {
	$counter = 0;
	foreach ($array1 as $person) {
		$matched = array_search($person, $array2);
		if($matched || $matched === 0) {
			$counter++;
		}
	}
	return $counter;
}

echo compare($names,$compare);



?>
