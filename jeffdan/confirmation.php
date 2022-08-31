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
        <h1><u>Confirmation</u></h1> 
		<hr>
         
		 <table width="800">
		 	<tr>
				<th height="34" colspan="7">Client Confirmation Details </th>
			</tr>  
			<tr>
			</td>
			</tr>
			<?php
					require 'common.inc/connect.php'; 
					 
					 $sql = mysql_query("SELECT * FROM profile");
					while($row=mysql_fetch_array($sql)){	
						 
						echo "<tr><th>FULL NAMES</th><th>".$row['full_names']."</th></tr>";
						echo "<tr><th>ID NUMBER</th><td>".$row['id_number']."</td></tr>";
						echo "<tr><th>POSTAL ADDRESS</th><td>".$row['postal_address']."</td></tr>";
						echo "<tr><th>E-MAIL</th><td>".$row['e_mail']."</td></tr>";     
					}
					echo "<tr>";
					echo "<th>No.</th>";
					echo "<th>MODEL</th>";
					echo "<th>ENGINE CAPACITY</th>";
					echo "<th>TYPE</th>";
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
					}
					?>  
					
			</tr>
			<form action="common.inc/logout.php" method="post">  
			<tr>
				<th align="center"><input type="submit" value="FINISH .."></th>
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
