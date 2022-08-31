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
        <h1><u>Budget And Detail confirmation</u></h1> 
		<hr>
         
		 <table>  	
			<form action="confirmation.php" method="post" name="form1"> 
			<tr>
				<th align="center" colspan="6"><label>How would you like to pay?</label></th>
			</tr>
			<tr>
			<td colspan="7">We do not accept payments made via PayPal.<strong>Sorry</strong>.</td>
			</tr>
			<tr>
			<td>
				<select><option selected="selected">Select mode of payment</option>
				<option>Cash On Arrival</option>
				<option>Bankers Cheque</option>
				<option>Credit Card</option></select> 
			</td>
			</tr>
			<tr>
				<th align="center" colspan="6"><label>Read the following instructions</label></th>
			</tr>
			<tr>
				<td colspan="7"><input type="checkbox" value="YES">
				<p align="justify">By checking this box I acknowledge CarBazz terms and conditions, the local supplier's terms and conditions, the points detailed below, and the privacy policy concerning use of my information.</p></td>
			</tr>
			<tr>
				<th align="center"><input type="submit" value="Make Payement NOW"></th>
			</tr>
			</form>
		 </table> 
		 <h2>In making this purchase I acknowledge the following:</h2>
		 <hr>
		 <br>
		 <ul>
		 <li>I understand that my credit/debit card will be debited for the total cost shown once the purchase is confirmed.</li>
		 <li>That all the information I have provided in the system is true and accurate and has not been falsified in any way.</li>
		 </ul>
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
