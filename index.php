<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome » MobileCare | Mobilized Healthcare</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/forms.css" rel="stylesheet" type="text/css" />
    
<!--
This CSS template is released under Creative Commons Attribution license. You shall not remove the link back to ramblingsoul.com from the pages.

Designed by - Roshan M. Ravi
URL - www.ramblingsoul.com
-->

</head>
<body>
<div id="wrap">
<div id="topbar">
  <ul>
  	<li class="current"><a href="#">Home</a></li>
    <li><a href="#">About MobCare</a></li>
    <li><a href="#">Contact us</a></li>
    <li><a href="#">Free Signup</a></li>
    <li><a href="#">User Login</a></li>
    <li><a href="#">Support</a></li>
    <li></li>
  </ul>
  </div>
<div id="header">
<div id="sitename">
<h1 id="logo">MobCare</h1>
</div>
<div id="shoutout"><img src="images/joinnow_shoutout.jpg" alt="Join Now! It's Free" width="168" height="126" /></div>
<div id="useractions">
<div id="headings"> 
<h2><img src="images/create_indi_usr.jpg" alt="Individual User" width="25" height="22" /> <a href="#">Sign Up Now!</a> </h2>   
<!--<h2><img src="images/create_agent_icon.jpg" alt="Agent Account" width="27" height="22" /> <a href="#">Create Agent Accoun</a>t</h2>-->
   </div>
<div id="login">
  <!-- <p><strong>Already registered ?</strong> Login here to access your account</p> -->
<div id="loginform">
<form name="login" method="post" action="login.php">
<div class="formblock">

<label>Username</label>
<input name="username" type="text" class="textfields" />
</div>
<div class="formblock">

<label>Password</label><input name="password" type="password" class="textfields"/>
</div>
<div class="formblock">
 <a href="javascript:document.login.submit()">
  <input type="image" src="images/loginbutton.jpg" name="login" id="button" value="Submit" />
 </a>
</div>

<div class="clear">&nbsp;</div>
<p>
  <input name="" type="checkbox" value="" /> 
  Remember me on this computer | Forgot password ?  </p>
</form>
</div>

</div>
</div>
</div>
<div id="content">
<div id="home_main"><div id="search"> 
<div class="tab">
<h2>Search Your Healthcare Data</h2>
</div>
<div class="container">
<form id="form1" action="#">
<table class="search_form" style="width:100%; border:none;">
	<!--
  <tr>
    <td class="label">Address</td>
    <td colspan="3"><label>
      <input type="text" name="textfield" id="textfield" class="text longfield" />
    </label></td>
    </tr>
  <tr>
    <td class="label">&nbsp;</td>
    <td colspan="3">Example : City, State / or use Zip Code - 123456</td>
  </tr>
 	-->
  <tr>
    <td class="label">Type</td>
    <td><label>
      <select name="select" id="select" class="select_field">
        <option>Menstrual</option>
        <option>Blood Pressure</option>
        <option>Blood Sugar</option>
        <option>Pulse</option>
      </select>
    </label></td>
    <td class="label">Start Date</td>
    <td><input type="text" name="textfield4" id="textfield4" class="text" /></td>
  </tr>
  <tr>
    <td class="label">Action</td>
    <td><label>
      <select name="select2" id="select2" class="select_field">
        <option selected="selected">Render</option>
        <option>Export</option>    
        <option>Share</option>    
      </select>
    </label></td>
    <td class="label">End Date</td>
    <td><input type="text" name="textfield2" id="textfield2" class="text" /></td>
  </tr>
  <tr>
	<td colspan=4>
		 Instructions:
		 <ul>
		 	<li>1) select what type of data you want to review</li>
		 	<li>2) select time span the data are searched from</li>
		 	<li>3) choose how to manipulate results in the last step</li>
		 </ul>   		 	  
	</td>
  	<!--
    <td class="label">Bed Rooms</td>
    <td><label>
      <input type="text" name="textfield5" id="textfield5" class="text smalltextarea" />
    </label></td>
    <td class="label">Bathrooms</td>
    <td><input type="text" name="textfield3" id="textfield3" class="text" /></td>
   -->
  </tr>
  <tr>
	<td colspan=4>
  	Tips: MobCare offer three ways to manipulate results
  	<ul>
  		<li>1) display the data in a graph</li>
  		<li>2) export to a PDF file and allow you to download it</li>
  		<li>3) share data with your friends and doctors via Weibo (dangrous :-)</li>
  	</ul>
     </td>
  	<!--
    <td class="label">Lot Size</td>
    <td><label></label>
      <input type="text" name="textfield7" id="textfield7" class="text" /></td>
    <td class="label">UOM</td>
    <td><input name="" type="radio" value="" />
      <label>Cents / 
      <input name="" type="radio" value="" />
      </label>
      Acres 
      /
      <input name="" type="radio" value="" />
      Sq. Ft.</td>
     -->
  </tr>
  <tr>
    <td class="label">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="label"><label>
      <input type="image" src="images/offersubmit.gif" alt="submit
      " name="button2" id="button2" value="Submit" />
    </label></td>
    </tr>
</table>



</form>

</div>
</div></div>


<div id="home_sidebar"><div class="hot">
<h2 class="sidebar_head"><span class="h2link"><a href="#">View More</a></span> Featured Stories </h2>
<ul>
<li><span class="imageholder">
<img src="images/Ms_xxx.jpg" alt="Image Place Holder" width="66" height="66" />
</span>
<h3><a href="#">Menstrual notifier makes my life easier</a></h3>
<p class="description">
Ms. xxx
<span class="price">MobCare user since xxxx</span>
</p>
<div class="clear">&nbsp;</div>
 </li>
<li><span class="imageholder">
<img src="images/Mr_yyy.png" alt="Image Place Holder" width="66" height="66" />
</span>
<h3><a href="#">Blood pressure monitor is awesome</a></h3>
<p class="description">
Mr. yyy
<span class="price">MobCare user since xxxx</span>
</p>
<div class="clear">&nbsp;</div>
 </li>
 <li><span class="imageholder">
<img src="images/Mr_zzz.jpg" alt="Image Place Holder" width="66" height="66" />
</span>
<h3><a href="#">I need ECG service</a></h3>
<p class="description">
Mr. zzz
<span class="price">MobCare user since xxxx</span>
</p>
<div class="clear">&nbsp;</div>
 </li>
</ul>
</div></div>
<div id="topcategorieslink" class="clear">
  <h2>Categories</h2>
  <ul>
    <li><a href="#">Menstrual</a> </li>

    <li><a href="#">Blood Pressure</a> </li>

    <li><a href="#">Blood Sugar</a> </li>

    <li><a href="#">Pulse</a> </li>

    <li><a href="#">Many More...</a> </li>
  </ul>
</div>
<!--
<div class="clear">&nbsp;</div>
<div id="main"> 
</div>

<div id="sidebar">
</div>

<div id="footer">
</div>
-->

</div>
</div>
</body>
</html>


<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Personalized Healthcare</title>
<link href="/style/global.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
<h1>
	Mobilize Your Healthcare Service
</h1>
<form id="subForm" name="login" method="post" action="login.php">
<table>
	<p>
	<tr>
		<td>
			<label for="username" class="label">Username</label>
		</td>
		<td>
			<input type="text" name="username" id="username" />
		</td>
	</tr>
	<tr>
		<td>
			<label for="password" class="label">Password</label>
		</td>
		<td>
			<input type="password" name="password" id="password" />
		</td>
	</tr>
	<tr>
		<td>
			<label for="password" class="label">Confirm Password</label>	
		</td>
		<td>
			<input type="password" name="passwordConfirm" id="password" />
		</td>
	</tr>
	<tr>	
		<td>
			<label for="email" class="label">Email Address</label>
		</td>
		<td>
			<input type="email" name="email" id="email" />
		</td>		
	</tr>
	</p>
	<p>
	<tr>
	  <input type="submit" name="login" value="login" />
      <input type="submit" name="register" value="register" />
      <input type="submit" name="help" value="help" />  	
	</tr>
	</p>
</table>       
</form>
</div>
</body>
</html>
-->