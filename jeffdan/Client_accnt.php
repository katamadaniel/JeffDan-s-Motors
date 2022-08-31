<?php
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>JeffDan | CLIENT</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  
<script type="text/javascript">
	function searchfield_focus(obj)
	{
	obj.style.color=""
	obj.style.fontStyle=""
	if (obj.value=="Search easyterra.com")
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

	<script type="text/javascript">
	
	/***********************************************
	* Dynamic Ajax Content- � Dynamic Drive DHTML code library (www.dynamicdrive.com)
	* This notice MUST stay intact for legal use
	* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
	***********************************************/
	
	var loadedobjects=""
	var rootdomain="http://"+window.location.hostname
	
	function ajaxpage(url, containerid){
	var page_request = false
	if (window.XMLHttpRequest) // if Mozilla, Safari etc
	page_request = new XMLHttpRequest()
	else if (window.ActiveXObject){ // if IE
	try {
	page_request = new ActiveXObject("Msxml2.XMLHTTP")
	} 
	catch (e){
	try{
	page_request = new ActiveXObject("Microsoft.XMLHTTP")
	}
	catch (e){}
	}
	}
	else
	return false
	page_request.onreadystatechange=function(){
	loadpage(page_request, containerid)
	}
	page_request.open('GET', url, true)
	page_request.send(null)
	}
	
	function loadpage(page_request, containerid){
	if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
	document.getElementById(containerid).innerHTML=page_request.responseText
	}
	
	function loadobjs(){
	if (!document.getElementById)
	return
	for (i=0; i<arguments.length; i++){
	var file=arguments[i]
	var fileref=""
	if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
	if (file.indexOf(".js")!=-1){ //If object is a js file
	fileref=document.createElement('script')
	fileref.setAttribute("type","text/javascript");
	fileref.setAttribute("src", file);
	}
	else if (file.indexOf(".css")!=-1){ //If object is a css file
	fileref=document.createElement("link")
	fileref.setAttribute("rel", "stylesheet");
	fileref.setAttribute("type", "text/css");
	fileref.setAttribute("href", file);
	}
	}
	if (fileref!=""){
	document.getElementsByTagName("head").item(0).appendChild(fileref)
	loadedobjects+=file+" " //Remember this object as being already added to page
	}
	}
	}
	
	</script>

<style type="text/css">
#leftcolumn{
float:left;
width:200px;
height: 200px;
border: 3px solid black;
padding: 5px;
padding-left: 8px;

}

#leftcolumn a{
padding: 3px 1px;
display: block;
width: 100%;
text-decoration: none;
font-weight: bold;
border-bottom: 1px solid gray;
}

#leftcolumn a:hover{
background-color: #FFFF80;
}

#rightcolumn{
float:left;
width:300px;
min-height: 50px;
border: 3px solid black;
margin-left: 10px;
padding: 5px;
padding-bottom: 8px;
}

* html #rightcolumn{ /*IE only style*/
height: 400px;
}
</style>
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
		  	<label style="font-size:29px">User Account&nbsp;</label>
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
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1><u>Welcome : <?php echo "Client";?></u></H1>
		 
		<h1><u>PROFILE</u></h1>  
		<table width="800">
         <?php
					require 'common.inc/connect.php';
					
					  session_start();
					  //$username = $_POST['username']; 
					
					$sql = mysql_query("SELECT * FROM profile");
					while($row=mysql_fetch_array($sql)){	
						 
						echo "<tr><th>FULL NAMES</th><th>".$row['full_names']."</th></tr>";
						echo "<tr><th>ID NUMBER</th><td>".$row['id_number']."</td></tr>";
						echo "<tr><th>POSTAL ADDRESS</th><td>".$row['postal_address']."</td></tr>";
						echo "<tr><th>E-MAIL</th><td>".$row['e_mail']."</td></tr>";     
					}
					?>
		</table>
		 
		<table>
		<tr>
				<th>Model</th>
				<th>Type</th>
			</tr>
			<form action="budget.php" method="get" name="form1">
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
				<td><select name="type">
				<option selected="selected">Select type</option>
						<option value="Petrol" id="Petrol">Petrol</option>
						<option value="Diesel" id="Diesel">Diesel</option>
						<option value="Hybrid" id="Hybrid">Hybrid</option>
				</select></td>
			</tr>
			<tr>
				<th align="center"><input class="submit" type="submit" name="buy_car" value="BUY CAR"></th>
			</form>	
		</tr>
		</table>
		<!--<h1>Current List of Selected Car(s)</h1>
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
					
					$sql = mysql_query("SELECT * FROM car_purchase WHERE ");
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
					
					</table>-->
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
