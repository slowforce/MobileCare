<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome » MobileCare | Mobilized Healthcare</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/forms.css" rel="stylesheet" type="text/css" />
</head>
<body>

 <?php
 if ($_SERVER['REQUEST_METHOD'] == 'GET')
 {
	$username=$_GET['username'];
 }
 else 
 {
 	$db='tim_hc';
 	$dbuser='tim_hc';
 	$dbpass='lyfavour';
 	$username=$_POST['user'];
	$year=$_POST['year'];		
	$month=$_POST['month'];
	$day=$_POST['day'];
	$dayOfMonth=array(31,28,31,30,31,30,31,31,30,31,30,31);

 	mysql_connect(localhost,$dbuser,$dbpass) or die(mysql_error());
 	@mysql_select_db($db) or die(mysql_error());
		
	$query="INSERT INTO menstrual VALUES('$year','$month','$day',$username) ";
	@mysql_query($query) or die(mysql_error());

	$yearNotif=$year;
	$monthNotif=$month;	
	$dayNotif = $day+28;
	if ($dayNotif>$dayOfMonth[$month])
	{		
		$monthNotif=$month+1;
		if ($monthNotif > 12)
		{
			$yearNotif=$year+1;
			$monthNotif=1;
		}
		$dayNotif=$dayNotif-$dayOfMonth[$month-1];
	}
		
	echo 
	"<h2>Your menstrual date has been kept, MobCare will send you an notification on $yearNotif-$monthNotif-$dayNotif</h2>";
	exit;
 }	
 ?>

 
<div id="main">
 <h2>
 	Please input your previous menstrul date, Mobcare will notify 
 	you just before your next menstrul getting started
 </h2>
	<form name="menstrual" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
	<table class="search_form" style="border:none;">
	<tr>
		<td>Month</td>	
		<td>Day</td>
		<td>Year</td>
	</tr>
	<tr>			
		<td><label>
			<select name="month" id="select" class="select_field">
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
		</label></td>	
		<td><label>
			<select name="day" id="select" class="select_field">
			<?php
		   		for ($i=1; $i<=31; $i++)
		   		{
		   			echo "<option value='$i'>$i</option>";
		  		}
			?>
			</select>
		</label></td>		
		<td><label>		 	
			<select name="year" id="select" class="select_field">
			<?php
		   		for ($i=2011; $i<=2020; $i=$i+1)
		   		{
		   			echo "<option value='$i'>$i</option>";
		   		}
		 		?>
		   	</select>
		</label></td>		   								
	</tr>
	<tr>
		<td>
		<input type="hidden" name="user" value="<?php echo $username?>"
		</td>
	</tr>
	<tr>
		<td>
		<div class="formblock">
 			<a href="javascript:document.menstrual.submit()">
 			<input type="image" src="images/offersubmit.gif" name="menstrual" id="button" value="Submit" /> 			
 			</a>

		</div>		
		</td>
	</tr>	      		      
   	</table>
	</form>
 		
</div>
</body>
</html>