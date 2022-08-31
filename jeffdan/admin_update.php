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
			NAME:Daniel<br>
			Mail:Daniel@jdmotors.co.ke<br>
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
			<th width="201">UPDATE CAR DETAILS</th> 
			<td width="182"><a href="purchases.php">VIEW PURCHASES</a></td>
			<td width="201"><a href="payments.php">VIEW PAYMENTS</a></td>
			<td width="132"><a href="customer.php">CUSTOMER DETAILS</a></td>
			<td width="201"><a href="admin.php">COMMENTS / CONCERNS</a></td>
			</tr>
		 </table>
		 
		 <h1>JeffDan's Motors</h1>
		<hr />
		 
		 <table> 
			<tr>
				<th>Model</th>
				<th>Engine Capacity</th>
				<th>Type</th>
				<th>Price</th>
			</tr>	
			<form action="common.inc/purchase.php" method="post" name="form1">
			<tr>
				<td>
				<select name="model">
				<option selected="selected">Select model</option>
						<option value="Saloon" id="Saloon">3 Series Saloon</option>
						<option value="Saloon" id="Saloon">5 Series Saloon</option>
						<option value="Saloon" id="Saloon">7 Series Saloon</option>
						<option value="Saloon" id="Saloon">M3 Saloon</option>
						<option value="Saloon" id="Saloon">M5 Saloon</option>
						<option value="Touring" id="Touring">3 Series Touring</option>
						<option value="Touring" id="Touring">5 Series Touring</option>
						<option value="Hybrid" id="Hybrid">ActiveHybrid 3</option>
						<option value="Hybrid" id="Hybrid">ActiveHybrid 5</option>
						<option value="Hybrid" id="Hybrid">ActiveHybrid 7</option>
						<option value="Gran Turismo" id="Gran Turismo">3 Series Gran Turismo</option>
						<option value="Gran Turismo" id="Gran Turismo">5 Series Gran Turismo</option>
						<option value="SUV" id="SUV">X1 SUV</option>
						<option value="SUV" id="SUV">X3 SUV</option>
						<option value="SUV" id="SUV">X5 SUV</option>
						<option value="SUV" id="SUV">X6 SUV</option>
						<option value="SUV" id="SUV">X6 M SUV</option>
				</select>				
				</td>
				<td><input type="text" name="capacity" required autofocus></td>
				<td><select name="type">
				<option selected="selected">Select type</option>
						<option value="Petrol" id="Petrol">Petrol</option>
						<option value="Diesel" id="Diesel">Diesel</option>
						<option value="Hybrid" id="Hybrid">Hybrid</option>
				</select></td>
				<td><input type="text" name="price" required autofocus></td>
			</tr>
			<tr>
				<th align="center"><input type="submit" value="UPDATE CAR"></th>
			</tr>
			</form>
		 </table>
		  
		 <h1>Current List of Cars</h1>
		 <hr>	
		 
		 <table width="800">
		 <?php
					require 'common.inc/connect.php';
					  
					echo "<tr>";
					echo "<th>No.</th>";
					echo "<th>MODEL</th>";
					echo "<th>CAPACITY</th>";
					echo "<th>Type</th>";
					echo "<th>PRICE</th>";
					echo "</tr>"; 
					
					$sql = mysql_query("SELECT * FROM car_purchase");
					while($row=mysql_fetch_array($sql)){	
						echo "<tr>";
						echo "<td>".$row['car_id']."</td>";	
						echo "<td>".$row['model']."</td>";
						echo "<td>".$row['capacity']."</td>";
						echo "<td>".$row['type']."</td>";
						echo "<td>".$row['price']."</td>";
						echo "</tr>";
					}
					?> 
					
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
