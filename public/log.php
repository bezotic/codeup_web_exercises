<?php


class Log 
{

	 public $filename;
	 public $handle;

	public function logMessage($logLevel, $message) 
	{
		$this->time = date("H-i-s");
		
		$this->date = date("Y-m-d");
		
	    $this->filename = 'log-YYYY-MM-DD.log';

	    $this->handle = fopen($filename, 'a');

	    
	    $this->onScreen = "Todays date: {$date}  The Current Time: {$time} " . $logLevel . " " . $message . PHP_EOL;

		fwrite($this->$handle,"$onScreen" . PHP_EOL);


	}


	public function info($message) 
	{

	$this->logMessage("INFO", $message);


	}

	public function error($message) 
	{

	$this->logMessage("ERROR", $message);

	}

}


