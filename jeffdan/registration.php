<!DOCTYPE HTML>
<html>

<head>
  <title>JeffDan | Join Us</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <meta charset="utf-8">
  <meta name= "viewport" content "width=device-width, initial-scale=1" >
  <link rel="stylesheet" href="style.css"/> 
  <script type="text/javascript" src='javascript.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap.css"
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="style/bootstrap.min.js"></script>
  <script type="text/javascript">
function searchfield_focus(obj)
{
obj.style.color=""
obj.style.fontStyle=""
if (obj.value=="Search JeffDan's Motors")
	{
	obj.value=""
	}
}
function searchmail_focus(obj)
{
if (obj.value=="e-mail")
	{
	obj.value=""
	}
}
</script>

</head>

<body>
 <div class="container">
 <div id="container-fluid">

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text"></div>
		 <center> <image src="images/logos/logo3.png" width=160 height=80> 
<h1>JeffreyDan's Motors</h1></center>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
		  <li ><a href="login.php">Login</a></li>
		  <li class="selected">
		  <font face="Courier New, Courier, monospace">
		  	<label style="font-size:29px">Join-Us &nbsp;</label>
			</font>
		</li> 
		  <li ><a href="contact.php">Contact Us</a></li>
		  <li><a href="AboutUS.php">About Us</a></li> 
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
		<h3>Special feature category</h3>
		<ul type="square">
		<li><a href="Models.html"><h4>All Models</h4></a></li>
		<li><a href="saloon_cars.html"><h4>Saloon Cars</h4></a></li>
		<li><a href="touring.html"><h4>Touring</h4></a></li>
		<li><a href="hybrid.html"><h4>Hybrid</h4></a></li>
		<li><a href="sport_utility.html"><h4>Sports Utility Vehicle</h4></a></li>
		</ul>
         
         
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <u><h1>Member Registration</h1></u> 
		<hr>
		<li><a href="login.php"><h4>Already have an account?...</h4></a></li>
        <form action="common.inc/register.php" method="post" >
          <div class="form_settings">     
			<p><span><h4>Full Names</h4></span><input class="contact" type="text" name="fname" value="" required autofocus/></p>
			<p><span><h4>Id Number</h4></span><input type="text" class="contact" name="idno" value="" required autofocus/></p>
			<p><span><h4>Postal Address</h4></span><input type="text" class="contact" name="paddress" value="" required autofocus/></p>
			<p><span><h4>Country</h4></span><input type="text" class="contact" name="country" value="" required autofocus/></p>
			<p><span><h4>E-Mail</h4></span><input type="text" class="contact" name="email" value="" required autofocus/></p>
			<p><span><h4>Username</h4></span><input type="text" class="contact" name="username" value="" required autofocus/></p>
			<p><span><h4>Password</h4></span><input type="password" class="contact" name="password" value="" required autofocus/></p>  
            <p style="padding-top: 15px"><input class="submit" type="submit" name="contact_submitted" value="Register" /></p>
          </div>
        </form> 
		</div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
		JeffDan's Vintage Motors
		<div id="copyright"><center><h4>&copy 2019</h4></center></div>
    </div>
  </div>
</body>
</html>
