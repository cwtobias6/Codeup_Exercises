<?php
require_once 'Log.php';

// $firstLog = new Log();
// $newDay = date("Y-m-d");
// $firstLog->filename = "log-" . $newDay . ".log";


// echo $firstLog->logMessage("loggy lvl done for the day", "messaging");
// echo $firstLog->info("this is info message");
// echo $firstLog->error("this is error message");


$loggy = new Log('cli');
echo $loggy->info("this is an info message");



?>
