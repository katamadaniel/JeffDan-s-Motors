<!DOCTYPE HTML>
<html>

<head>
  <title>JeffDan | ADMIN</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  
  <script type="text/javascript">
function searchfield_focus(obj)
{
obj.style.color=""
obj.style.fontStyle=""
if (obj.value=="Search carbazz.com")
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
		  	<label style="font-size:29px">dashboard&nbsp;</label>
			</font>
		</li>  
          <li ><a href="common.inc/logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
		 <h3>Admin Profile:</h3>
        <table width="176" height="164">	 
		<tr>
			<th>
			NAME:Patrick<br>
			Mail:Patrick@carbazz.co.ke<br>
			Position: Admin<br>
			</th>
		</tr>
		</table>          
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome Back Admin</h1>
		<hr /> 
		
		<table>
		 	<tr>
				<th colspan="4">DASHBOARD MENU</th>
			</tr>
			<tr>
			<th width="115">PURCHASES</th>
			<td width="100"><a href="admin_update.php">UPDATE</a></td>
			<td width="116"><a href="payments.php">VIEW PAYMENTS</a></td>
			<td width="127"><a href="customer.php">CUSTOMER DETAILS</a></td>
			<td width="118"><a href="admin.php">COMMENTS / CONCERNS</a></td>
			</tr>
		 </table>
		 
		 <h1>Existing Purchases</h1>
		<hr />
		<table>
			<tr>
				<th><marquee behavior="alternate">Incoming purchases</marquee></th>
			</tr>
		</table>  
		
		 <table width="800">
		 <?php
					require 'common.inc/connect.php';
					  
					echo "<tr>";
					echo "<th>MODEL</th>";
					echo "<th>CAPACITY</th>";
					echo "<th>PRICE</th>"; 
					echo "<th>MODE OF PAYMENT</th>"; 
					echo "<th>USERNAME</th>";
					echo "</tr>"; 
					
					$sql = mysql_query("SELECT * FROM purchases");
					while($row=mysql_fetch_array($sql)){	
						echo "<tr>";	
						echo "<td>".$row['model']."</td>";
						echo "<td>".$row['capacity']."</td>";
						echo "<td>".$row['price']."</td>";
						echo "<td>".$row['payment_mode']."</td>";   
						echo "</tr>";
					}
					?> 
					
					</table>	  
		
</div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
	JeffDan's Vintage Motors
	<div id="copyright"><center><h4>&copy 2019</h4></center></div>    </div>
  </div>
</body>
</html>
