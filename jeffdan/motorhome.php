<!DOCTYPE HTML>
<html>

<head>
  <title>JeffDan | MotorHome</title>
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
			<label style="font-size:29px">MotorHome</label>
			</font>
		</li>  
          <li ><a href="common.inc/logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>l
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
		<h3>Search</h3>
        <table>		
        <form id="search">
		<tr>
		<td width="202">
		<input type="hidden" name="sitesearch" value="carbazz.com" />
	    <input name="text" type="text" value="Search carbazz.com" id="textbox" onFocus="searchfield_focus(this)"  style="		                       color:#808080;font-style:italic;" />
		</td>
		</tr>
		<tr>
		<th>
		<input type="submit" value="Search" id="button" />
		</th>
		</tr>
		</form>
		</table>
        <h3>Subscribe for great deals</h3>
        <h4>
				  <table style="width:100%; border-spacing:0;">
				  <form action="" method="post">
				  <tr>
				  <td width="152" align="center"> 
				  <input type="hidden" name="sitesearch" value="e-mail" />
	              <input name="text" type="text" value="e-mail" id="textbox" onFocus="searchmail_focus(this)"  style="color:#808080;font-style:italic;" />
				  </td> 
				  </tr> 
				  <tr>
				  <th width="152" align="center"><input type="submit" value="Subscribe" id="button"></th> 
				  </tr> 
				  </form>
				  </table>
		</h4>
	    <img src="images/Random/5_ser_seda_download_07.jpg" width="194" height="165">
	    <p align="justify"><b>BMW EfficientDynamics</b>
	    <p align="justify">BMW EfficientDynamics is not just a vision but can also be experienced in a package of intelligent technologies that noticeably reduce fuel consumption and emissions - while, at the same time, considerably increasing driving pleasure. </p>
        <p><img src="images/Random/index.jpg" width="194" height="165"></p>
	    <p align="justify"><b>BMW M</b>
        <p align="justify">Driving pleasure meets perfection. Motorsport meets passion. BMW M Gmbh always has one goal: creating vehicles that have what it takes to become legends. <br /> </a></p>
          </div>
		  
      <div id="content">
        <!-- insert the page content here -->
        <h1><p><strong>Car Purchase Successful!</strong></p></h1>
		<hr>
      <table>
		 	<tr>
				<th colspan="3">SELECT CAR CATEGORY</th>
			</tr>
			<tr>
			<td width="201"><a href="saloon_cars.html">SALOON CARS</a></td>
			<td width="182"><a href="touring.html">TOURING</a></td>
			<td width="201"><a href="hybrid.html">HYBRID</a></td>
			<tr><td width="201"><a href="gran_turismo.html">GRAN TURISMO</a></td>
			<td width="201"><a href="sport_utility.html">SUV</a></td></tr> 
		 	<tr>
				<th width="574" height="34" colspan="6">Car Purchase </th>
			</tr> 
			<tr>
				<td ><a href="gran_turismo.html"><img src="images/Gran Turismo/BMW 5 Series Gran Turismo.png" width="210" height="117"></a></td>
				<td ><a href="hybrid.html"><img src="images/Hybrid/BMW ActiveHybrid 7.png" width="210" height="117"></a></td>
				<td ><a href="sport_utility.html"><img src="images/Sports Utility Vehicle/BMW X6 M.png" width="210" height="117"></a></td>
			</tr>	
			 
		 </table>
		 
		 <table>
		 	<tr>
				<th width="592"><a href="index.php">More...</a></th>
			</tr> 
		 </table>
		 <br>
		 <br>
		 <br>
		 <br>
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
