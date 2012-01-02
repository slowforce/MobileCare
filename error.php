<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Personalized Healthcare</title>
<link href="/style/global.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<?php
	$errorcode=$_GET['code'];
	if ($errorcode==1)
	{
		echo "<h2>User is not existed, please check your username and try again</h2>";
	}
	else if($errorcode==2)
	{
		echo "<h2>Your registration failed, please try again later</h2>"; 
	}
	else if($errorcode==3)
	{
		echo "<h2>Username is not available, please pick another name and try again</h2>"; 
	}
	else if($errorcode==4)
	{
		echo "<h2>Username and password does not match, please try again</h2>";
	}
	else
	{
		echo "<h1>Fatal error</h1>";
	}
?>
</div>
</body>
</html>