<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$person = 'Dean';


// function searching($person, $names) {
// 	$personFound = array_search($person, $names);
// 	if($personFound === 0) {
// 		return true . PHP_EOL;
// 	} else if ($personFound) {
// 		return true . PHP_EOL;
// 	} else {
// 		return false . PHP_EOL;
// 	}
// }

//  echo searching($person, $names) . PHP_EOL;

 function merge($array1,$array2) {
 		$newArray = [];
 		$index = 0;
 		foreach($array1 as $key => $value) {
 			if($array1[$index] == $array2[$index]) {
 				array_push($newArray, $array1[$index]);
 				$index++;
 			} else {
 				array_push($newArray,$array1[$index]);
 				array_push($newArray,$array2[$index]);
 				$index++;
 			}
 		}
 		return $newArray;
 }

 print_r(merge($names,$compare));