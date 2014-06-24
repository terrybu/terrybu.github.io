<?php 
	include("_includes/DateUtility.php");
	$welcome = "Welcome Terry Buuuu asdfsafsa";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP practice</title>
</head>

<body>

<?php echo $welcome ?>

<?php include("_includes/header.php"); ?>

<?php 
	$dateutil = new DateUtility();
	$dateutil->getCurrentTime(); 
?>

</body>
</html>