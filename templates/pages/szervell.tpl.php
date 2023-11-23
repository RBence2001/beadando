<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<?php

	if(!isset($_POST['subject']) || strlen($_POST['subject']) < 5)
	{
		exit("Hibás név: ".$_POST['subject']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	}

	if(!isset($_POST['subject']) || empty($_POST['subject']))
	{
		exit("Hibás szöveg: ".$_POST['subject']);
	}

	echo "Kapott értékek: ";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
?>
	</body>
</html>