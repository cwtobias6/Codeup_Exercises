<?php


for($start = 1; $start < 100; $start++) {
	if(($start % 3 == 0) && ($start % 5 == 0)){
		echo "\nFizzBuzz\n";
	} else if ($start % 3 == 0){
		echo "\nFizz\n";

	} else if($start % 5 == 0) {
		echo "\nBuzz\n";
	} else {
		echo "\n{$start}\n";
	}
}



?>