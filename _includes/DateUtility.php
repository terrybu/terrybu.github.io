<?php 
include_once("Zend/Date.php");
class DateUtility {
	public function getCurrentTime ()
	{
		$zendDate = new Zend_Date();
		date_default_timezone_set("America/New_York");
		echo "The current time is ";	
		echo date("g:i");
		echo "<br/>";
		echo "The current date is ";
		echo $zendDate->toString("MMMM d, YYYY");
	}
}

?>