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
			NAME:Deaniel<br>
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
			<th width="117">PAYMENTS</th>
			<td width="101"><a href="admin_update.php">UPDATE</a></td>
			<td width="111"><a href="purchases.php">VIEW PURCHASES</a></td>
			<td width="129"><a href="customer.php">CUSTOMER DETAILS</a></td>
			<td width="118"><a href="admin.php">COMMENTS / CONCERNS</a></td>
			</tr>
		 </table>
		 
		 <h1>Existing Payments</h1>
		<hr />
		 
		 <?php
				require 'common.inc\connect.php'; 
				  
				echo "<br>";
				echo "<table width='600'>";
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>FIRST NAME</th>";
				echo "<th>LAST NAME</th>";
				echo "<th>ADDRESS</th>";
				echo "<th>COUNTRY</th>";
				echo "<th>E-MAIL</th>";
				echo "</tr>"; 
				
				$sql = mysql_query("SELECT * from payment");
				while($row=mysql_fetch_array($sql)){	
					echo "<tr>";	
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['fname']."</td>";
					echo "<td>".$row['sname']."</td>";
					echo "<td>".$row['address']."</td>";
					echo "<td>".$row['country']."</td>";
					echo "<td>".$row['email']."</td>"; 
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
