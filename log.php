<?php

class Log
{

	private $filename;
	private $handle;


	public function __construct($prefix = 'log') {
		
		$this->filename = $this->setFilename($prefix);
		$this->handle = fopen($this->filename, 'a');


	}

	public function logMessage($logLevel, $message)
	{
		$newLog = date('Y-m-d H:i:s');
		
		fwrite($this->handle, PHP_EOL . $newLog . " " . $logLevel . " " . $message);

	}

	public function info($message){
		$this->logMessage("INFO", $message);
	}

	public function error($message){
		$this->logMessage("ERROR", $message);
	}

	public function __destruct(){
		fclose($this->handle);
	}
	protected function setFilename($prefix) 
	{	
		if(touch($this->filename) && is_writable($this->filename)){

			if(is_string($prefix)) {
				$this->prefix = $prefix;
				$newDay = date("Y-m-d");
				$this->filename = $this->prefix . "-" . $newDay . ".log";

			} else {
				exit("cannot open file");
			}
		}

	}

	public function __destruct()
	{
		if(isset($this->handle)){
			fclose($this->handle);
		}
	}

	

}





?>