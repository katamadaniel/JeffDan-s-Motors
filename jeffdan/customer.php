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
			<th width="201">CLIENT DETAILS</th>
			<td width="182"><a href="admin_update.php">UPDATE</a></td>
			<td width="182"><a href="purchases.php">VIEW PURCHASES</a></td>
			<td width="201"><a href="payments.php">VIEW PAYMENTS</a></td>
			<td width="201"><a href="admin.php">COMMENTS / CONCERNS</a></td>
			</tr>
		 </table>
		 
		 <h1>Registered Clients</h1>
		<hr />
		
		<table>
			<tr>
			  <th width="208"><marquee behavior="alternate">CarBazz Clients</marquee></th></tr>
				 
<?php
    // Connect to the database
    $dbLink = new mysqli('127.0.0.1', 'carbazz', 'carbazz', 'carbazz');
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }
	$sql = 'SELECT COUNT(*)`user_id` FROM `profile`';
    $result = $dbLink->query($sql);
	
	if($result) {
	
	 while($row = $result->fetch_assoc()) {
                echo "<tr><th>Total No. Of Registered Clients</th><td> {$row['user_id']} </td></tr>";
            }
	
	}
	$dbLink->close();
	
?> 
			</tr>
		</table> 
		 
		 <?php
				require 'common.inc\connect.php'; 
				   
				echo "<table width='815'>";
				echo "<tr>";
				echo "<th>USER ID</th>";
				echo "<th>FULL NAME</th>";
				echo "<th>ID NUMBER</th>";
				echo "<th>POSTAL ADDRESS</th>";
				echo "<th>COUNTRY</th>";
				echo "<th>E-MAIL</th>";
				echo "<th>USERNAME</th>";
				echo "</tr>"; 
				
				$sql = mysql_query("SELECT * from profile");
				while($row=mysql_fetch_array($sql)){	
					echo "<tr>";	
					echo "<td>".$row['user_id']."</td>";
					echo "<td>".$row['full_names']."</td>";
					echo "<td>".$row['id_number']."</td>";
					echo "<td>".$row['postal_address']."</td>";
					echo "<td>".$row['country']."</td>";
					echo "<td>".$row['e_mail']."</td>"; 
					echo "<td>".$row['username']."</td>"; 
					echo "</tr>"; 
				}
				echo "</table>";
				echo "<br>";
				?>		  
		
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
