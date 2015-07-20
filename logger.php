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

function loginfo($message){
	logMessage("INFO", $message);
	
};
function logerror($message){
	logMessage("ERROR", $message);
};


loginfo("Hello and Welcome");
logerror("This is an error");


