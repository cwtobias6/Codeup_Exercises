<?php

function logMessage($logLevel, $message)
{
	$newDay = date("Y-m-d");
	$newLog = date('Y-m-d H:i:s');

    $filename = "{$newDay}.txt";
	$handle = fopen($filename, 'a');
	
	fwrite($handle, PHP_EOL . $newLog . " " . $logLevel . " " . $message);

	fclose($handle);
}



logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");
