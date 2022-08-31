<!DOCTYPE HTML>
<html>

<head>
  <title>JeffDan | MotorHome</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text --> 
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on --> 
          <li class="selected">
		  <font face="Courier New, Courier, monospace">
		  	<label style="font-size:29px">MotorHome &nbsp;</label>
		 </font>
		 </li>  
          <li ><a href="common.inc/logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>l
    <div id="content_header"></div>
    <div id="site_content">
      
      <div id="content">
        <!-- insert the page content here -->
        <h1><u>Profile Details</u></h1> 
		<hr>
         <h2>The following details are required for account confirmation. Please bare with us before proceeding.</h2>
	   <table width="800">
		 <form action="common.inc/profile.php" method="post"> 
		 	<tr>
				<th height="34" colspan="7">Personal Info</th>
			</tr> 				
			</tr>
			 
			<tr>
			<td>First Name</td>
			<td><input type="text" name="fname" required autofocus></td>
			<td>Last Name</td>
			<td><input type="text" name="lname" required autofocus></td>
			</tr>
			
			<tr>
			<td>ID Number</td>
			<td><input type="text" name="idno" required autofocus></td>
			<td>Phone Number</td>
			<td><input type="text" name="phoneno" required autofocus></td>
			</tr>
			
			<tr>
			<td>PIN Number</td>
			<td><input type="text" name="pin" required autofocus></td>
			<td>E-mail</td>
			<td><input type="text" name="email" required autofocus></td>
			</tr> 
						
			<tr>
				<th align="center"><input type="submit" value="PROCEED TO PAYMENT"></th>
			</tr>
		 </form>
	   </table> 
	    
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
