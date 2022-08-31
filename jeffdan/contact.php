<!DOCTYPE HTML>
<html>

<head>
  <title>JeffDan| ContactUs</title>
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
		  <li ><a href="registration.php">Join-Us</a></li> 
          <li class="selected">
		  <font face="Courier New, Courier, monospace">
		  	<label style="font-size:29px">Contact Us &nbsp;</label>
			<li><a href="AboutUS.php">About Us</a></li> 
		</font>
		</li>
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
        <u><h1>Contact Us On:</h1></u>
		<h4>Land line <u>[020] 123 9456</u></h4>
        <h4>Cell No. <u>0712345678</u></h4> 
		<hr>
		<h3>Your comments and request</h3>
        <form action="common.inc/add_comment.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="name" value="" required autofocus/></p>
            <p><span>Email Address</span><input class="contact" type="text" name="email_address" value="" required autofocus/></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="concerns" required autofocus></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
        </form> 
		<br>
		<u><h2>Google Map Location</h2></u>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.793394005168!2d36.759666265003744!3d-1.2987234860067796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a6af785f0f3%3A0xc87e47e63ed244ed!2sThe%20Junction%20Mall!5e0!3m2!1sen!2ske!4v1661949321754!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
