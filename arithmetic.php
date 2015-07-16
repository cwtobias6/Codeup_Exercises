<?php



function add($a,$b)
{
	if(errorCheck($a,$b)){
		return $a + $b;
	}
}

function subtract($a,$b)
{
	if (errorCheck($a,$b)) {
    	return $a - $b;
    }

}

function multiply($a,$b)
{
	if(errorCheck($a,$b)) {
		return $a * $b;
	}
}

function divide($a,$b)
{
	if(errorCheck($a,$b)) {
    	if($b == 0){
    		return "error, can't divide by zero";
    	}
		return $a / $b;
	}
    	
}

function modulous($a,$b)
{
	if(errorCheck($a,$b)) {
		return $a % $b;
	}

}

function errorCheck($a,$b) {
		if(is_numeric($a) && is_numeric($b)) {
			return true;
		} else {
			return false;
			echo "ERROR: $a and $b must both be numbers\n";
		}
}

echo add(5,10) . PHP_EOL;

echo subtract(5,10) . PHP_EOL;

echo multiply(5,10) . PHP_EOL;

echo divide(5,10) . PHP_EOL;

echo modulous(5,10) . PHP_EOL;
