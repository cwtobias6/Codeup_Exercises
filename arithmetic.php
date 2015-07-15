<?php



function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		if($b == 0){
    		return "error, can't divide by zero";
    	} else {
    		return $a + $b;
    	}
    } else {
    	return "ERROR: $a and $b must both be numbers\n";

    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		if($b == 0){
    		return "error, can't divide by zero";
    	} else {
    		return $a - $b;
    	}
	} else {
		return "ERROR: $a and $b must both be numbers\n";
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	if($b == 0){
    		return "error, can't divide by zero";
    	} else {
    		return $a * $b;
    	}
    } else {
    	return "ERROR: $a and $b must both be numbers\n";

    }
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	if($b == 0){
    		return "error, can't divide by zero";
    	} else {
    		return $a / $b;
    	}
    } else {
    	return "ERROR: $a and $b must both be numbers\n";

    }
}

function modulous($a,$b)
{
	if (is_numeric($a) && is_numeric($b)) {
		if($b == 0){
    		return "error, can't divide by zero";
    	} else {
    		return $a % $b;
    	}
	} else {
		return "ERROR: $a and $b must both be numbers\n";
	}

}

function error()

echo add(5,10);

echo subtract(5,10);

echo multiply(5,10);

echo divide(5,10);

echo modulous(5,10);
