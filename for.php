<?php

fwrite(STDOUT, "Give me a START number\n");
$start = (int)fgets(STDIN);
fwrite(STDOUT, "Give me a END number\n");
$end = (int)fgets(STDIN);
fwrite(STDOUT, "Give me a incrementer value\n");
$increment = (int)fgets(STDIN);

if($start > $end) {
	for($start; $start >= $end; $start-=$increment) {
		echo "\n{$start} " . "down and out\n";
	}
}

if($end > $start) {
	for($start; $start <= $end; $start+=$increment) {
		echo "\n{$start} " . "down and out\n";
	}
}


?>