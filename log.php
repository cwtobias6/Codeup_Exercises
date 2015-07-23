<?php

class Log
{

	public $filename;

	public function logMessage($logLevel, $message)
	{
		$newLog = date('Y-m-d H:i:s');
		$handle = fopen($this->filename, 'a');
		
		fwrite($handle, PHP_EOL . $newLog . " " . $logLevel . " " . $message);

		fclose($handle);
	}

	function info($message){
		$this->logMessage("INFO", $message);
	}

	function error($message){
		$this->logMessage("ERROR", $message);
	}


}





?>