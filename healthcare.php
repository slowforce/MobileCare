<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Mobilized Personalized Healthcare</title>
<link href="/style/global.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<?php
 	$username=$_GET['username'];
 	$newuser=$_GET['newuser'];
	
 	$db='tim_hc';
 	$dbuser='tim_hc';
 	$dbpass='lyfavour';
 
 	mysql_connect(localhost,$dbuser,$dbpass) or die(mysql_error());
 	@mysql_select_db($db) or die(mysql_error());
 ?>
 <h2>
 	Please input your previous menstrual date, Mobcare will notify you
 	just before your next menstrul date :-) 
 </h2>
	<form id="subForm" name="hcSubmit" method="post" action="healthcare.php">
	<table>
	<tr>
		<td>
			<select name="month">
				<option value="1">January</option>
			    <option value="2">February</option>
			    <option value="3">March</option>
			    <option value="4">April</option>
			    <option value="5">May</option>
			    <option value="6">June</option>
			    <option value="7">July</option>
			    <option value="8">August</option>
			    <option value="9">September</option>
			    <option value="10">October</option>
			    <option value="11">November</option>
			    <option value="12">December</option>
			</select>
			<select name="day">
				<?php
		    		for ($i=1; $i<=31; $i++)
		    		{
		     			echo "<option value='$i'>$i</option>";
		    		}
				?>
		   	</select>
		   	<select name="year">
		   		<?php
		    		for ($i=2050; $i>=2011; $i=$i-1)
		    		{
		     			echo "<option value='$i'>$i</option>";
		    		}
		   		?>
		   </select>		   								
		</td>
	</tr>	
	<tr>
		<input type="submit" name="submit" value="submit" />
	</tr>	      		      
   </table>
	</form>
 		
</div>
</body>
</html>