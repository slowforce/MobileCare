<?php
	if (isset($_POST['help']))
	{
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'help.php';
		header("Location: http://$host$uri/$extra");
		exit;
	}
	else
	{
		$db='tim_hc';
		$dbuser='tim_hc';
		$dbpass='lyfavour';
		
		mysql_connect(localhost,$dbuser,$dbpass);
		@mysql_select_db($db) or die( "Unable to select database");
	
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		
		$query="SELECT * FROM users where name='$username'";
		$result=mysql_query($query);	
		$num=mysql_numrows($result);
			
		if (isset($_POST['login']))
		{
			if ($num==0) 
			{	
				mysql_close();
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'error.php';
				header("Location: http://$host$uri/$extra?code=1");
				exit;	
			}
			else		
			{
				mysql_close();
				# redirect to healcare page
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'healthcare.php';
				header("Location: http://$host$uri/$extra?username='$username'&newuser=0");
				exit;
			}
		}
		else if (isset($_POST['register']))
		{
			if ($num==0) 
			{	
				$usernumquery="SELECT * FROM users";
				$usernumresult=mysql_query($usernumquery);
				$userid=mysql_numrows($usernumresult)+1;
				$regdate=date("Ymd");	# TODO: consider timezone
				
				$userregquery = "INSERT INTO users VALUES ('$userid','$username','$password','$email','$regdate')";
				$userregresult=mysql_query($userregquery );
				if (!userregresult)
				{
					mysql_close();
					$host  = $_SERVER['HTTP_HOST'];
					$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
					$extra = 'error.php';
					header("Location: http://$host$uri/$extra?code=2");
					exit;	
				}
				else
				{
					mysql_close();
					
					# redirect to healcare page
					$host  = $_SERVER['HTTP_HOST'];
					$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
					$extra = 'healthcare.php';
					header("Location: http://$host$uri/$extra?username='$username'&newuser=1");
					exit;				
				}
			}
			else		
			{
				mysql_close();
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'error.php';
				header("Location: http://$host$uri/$extra?code=3");
				exit;	
			}		
		}
	}
?>