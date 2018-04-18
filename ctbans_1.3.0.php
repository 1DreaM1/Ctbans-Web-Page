<!--
CtBans  Copyright (C) 2017-2018 DreaM (support@overgame.eu)
	
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="description" content="JailBreak CTBanlist">
<meta name="keywords" content="bans,ctbans,csgo,csko,cs,ct,jailbreak">
<meta name="author" content="DreaM (support@overgame.eu)">
<link rel="icon" href="____________FAVICON LINK TO IMG____________" sizes="32x32" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>
JailBreak | CTBanlist
</title>
<style type="text/css">
body {background-color: #fcfcfc; color: #222;}
body, td, th, h1, h2 {font-family: sans-serif;}
pre {margin: 0px; font-family: monospace;}

.pg {
	text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
	background-color: #3473c1;
    color: white;
	border: 1px solid #3473c1;
	transition: 0.4s;
}
.pg:hover {background-color: white;
    color: #3473c1;
	border: 1px solid #3473c1;
}

.button {
	text-decoration: none;
    display: inline-block;
    padding: 10px;
	background-color: #3473c1;
    color: white;
	border: 1px solid #3473c1;
	transition: 0.4s;
	width: 15%;
}
.button:hover {background-color: white;
    color: #3473c1;
	border: 1px solid #3473c1;
}

input[type=submit] {
	text-decoration: none;
    display: inline-block;
    padding: 12px;
	font-size: 16px;
	font-weight: bold;
	background-color: #3473c1;
    color: white;
	border: 1px solid #3473c1;
	transition: 0.4s;
	width: 14%;
}
input[type=submit]:hover {background-color: white;
    color: #3473c1;
	border: 1px solid #3473c1;
}

.center {text-align: center;}

#bans {
	margin-left: auto;
	margin-right: auto;
	text-align: center;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
}

#bans td, #bans th {
    border: 1px solid white;
    padding: 8px;
	font-size: 14px;
}

#bans tr:nth-child(even){background-color: #f2f2f2;}

#bans tr {
	background-color: #f9f9f9;
}

#bans tr:hover {background-color: #ddd;}

#bans td {
	cursor: pointer;
}

#bans th {
    padding-top: 13px;
    padding-bottom: 13px;
    text-align: center;
    background-color: #2184ff;
    color: white;
	font-size: 16px;
	cursor: context-menu;
}

#spec {
	margin-left: auto;
	margin-right: auto;
	text-align: left;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
}

#spec tr:nth-child(even){background-color: #ededed;}

#spec tr {background-color: #e0e0e0;}

#spec tr:hover {background-color: #ddd;}

#spec td {
	border: 1px solid white;
    padding: 8px;
	font-size: 14px;
	cursor: context-menu;
}

h1 {font-size: 150%;}
h2 {font-size: 125%;text-align:center;}
.p {text-align: left;}
.e {background-color: #f9f9f9; color: #000000; }
.h {background-color: #a5a2a2; font-weight: bold; color: #000000; font-size: 125%;}
.v {background-color: #e2e2e2; color: #000000; } 
.vr {background-color: #cccccc; text-align: right; color: #000000;}
img {float: right; border: 0px;}
hr {width: 600px; background-color: #cccccc; border: 0px; height: 1px; color:#000000;}
#myInput {
  background-image: url('https://overgame.eu/img/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 70%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#main {
    transition: margin-left .5s;
    padding: 0px 16px 0px 16px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.container {
    display: inline-block;
    cursor: pointer;
}
.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
}
.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-9px, 6px);
}
.change .bar2 {opacity: 0;}
.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
}

footer {
	left: 0px;
	right: 0px;
	bottom: 0px;
	font-size: 12px;
	margin-bottom: 0px;
	padding: 15px;
	color: white;
	overflow: hidden;
    background-color: #223;
}

.progress {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
  left: 0px;
  right: 0px;
  background-color: #f1f1f1;
}

.progress-container {
  width: 100%;
  height: 4px;
  background: #ccc;
}

.progress-bar {
  height: 4px;
  background: #f44336;
  width: 0%;
}

#header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

.dream {
	color: #5542ff;
	text-decoration: none;
}
.dream:hover {
	color: red;
	text-decoration: underline;
}

#navbar {
  overflow: hidden;
  left: 0px;
  right: 0px;
}

.topnav {
  position: relative;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 17px;
  border-right: 1px solid white;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  transition: 0.4s;
  text-decoration: underline;
}

.topnav a.active {
  background-color: #3473c1;
  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-left: 1px solid white;
  border-right: 1px solid white;
}

.topnav-right {
  float: right;
  border-left: 1px solid white;
}

.topnav-left {
  float: left;
  border-left: 1px solid white;
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}

#Sidenav a {
    position: fixed;
    left: -85px;
    transition: 0.4s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#Sidenav a:hover {
    left: 0;
}

#id_1 {
    top: 245px;
    background-color: #4CAF50;
}

#id_2 {
    top: 305px;
    background-color: #2196F3;
}

#id_3 {
    top: 365px;
    background-color: #f44336;
}

#social {
	color: white;
}

#social:hover {
	color: red;#2184ff
}

#page_up {
	color: white;
}

#page_up:hover {
	color: #2184ff;
}

#scrollUp {
  display: none;
  position: fixed;
  bottom: 13px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #f44336;/*#3473c1*/
  color: white;
  cursor: pointer;
  padding-left: 13px;
  padding-right: 13px;
  padding-top: 7px;
  padding-bottom: 7px;
  border-radius: 4px;
  transition: 0.4s;
}

#scrollUp:hover {
  background-color: #0000cc;
}
</style>
</head>
<body>

<div class="progress">
	<div class="progress-container">
		<div class="progress-bar" id="myBar"></div>
	</div>  
</div>

<div id="header">
	<h2>JailBreak | JailBreak CT Bany</h2>
	<p>List of CtBans.</p>
</div>

<!-- Top navigation -->
<div id="navbar">
	<div class="topnav">

	<!-- Centered link -->
	<div class="topnav-centered">
		<a id="defaultOpen" href="<?php echo $_SERVER['PHP_SELF'] ?>" class="active">⁞ Home ⁞</a>
	</div>
  
	<!-- Left-aligned links (default) -->
	<div class="topnav-left">
		<a style="border-left:0px;" href="______LINK______">Web</a>
		<a href="______LINK______">BanList</a>
	</div>
  
	<!-- Right-aligned links -->
	<div class="topnav-right">
		<a href="______LINK______">Forum</a>
		<a style="border-right:0px;" href="______LINK______">HLstatsX</a>
	</div>
	</div>
</div>

<div id="Sidenav" class="sidenav">
  <a href="______LINK______" id="id_1">EVIP<i style="float:right;" class="material-icons" style="font-size:36px">grade</i></a>
  <a href="______LINK______" id="id_2">Obchod<i style="float:right;" class="material-icons" style="font-size:36px">shopping_cart</i></a>
  <a href="______LINK______" id="id_3">Kontakt<i style="float:right;" class="material-icons" style="font-size:36px">contact_mail</i></a>
</div>

<br><br><br><br>

<div id="main">

<div class="center">
 
<script>
//Search [disabled]
function myFunction() {
  var input, filter, table, tr, td, td2, td3, td4, td5, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("bans");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
	td3 = tr[i].getElementsByTagName("td")[3];
	td4 = tr[i].getElementsByTagName("td")[4];
    if (td || td2 || td3 || td4) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td3.innerHTML.toUpperCase().indexOf(filter) > -1 || td4.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
//SideBar [disabled]
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "#fcfcfc";
}

// Page scroll 

function myScroll() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

//NavBar
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function mySMenu() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

//Show Scroll button

// When the user scrolls down 20px from the top of the document, show the button

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollUp").style.display = "block";
    } else {
        document.getElementById("scrollUp").style.display = "none";
    }
}

//Page Scroll
function smoothscroll(){
    var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
    if (currentScroll > 0) {
         window.requestAnimationFrame(smoothscroll);
         window.scrollTo (0,currentScroll - (currentScroll/5));
    }
}

//Scrolling bar,...

window.onscroll = function() {myScroll() ;mySMenu(); scrollFunction()};

</script>

<?php

$server="______HOST______";
$username="______USER______";
$password="______PSW______";
$database="______DB______";
$table_prefix=""; //DB PREFIX, default -> empty
 
$results_per_page="15";

ini_set('default_charset', 'utf-8');

function show_ctban_table($dbh, $query, $results_per_page, $ctbanpage, $table_prefix, $database)
{
	if (isset($_GET['search']) && $_GET['submit_search']=='Search') {
		$action = "action='{$_SERVER['PHP_SELF']}'";
		$value = "value='Back'";
		$required = "";
	}
	else	{
		$action = "method='get'";
		$value = "value='Search'";
		$required = "required";
	}
	
	print "<form $action ><input type='text' id='myInput' name='search' placeholder='Search for SteamID, Name, Admin Name, Reason..' title='Type in a SteamID' $required>  <input type='submit' name='submit_search' $value ></form><br><br>";
	
	$results = mysqli_query($dbh, $query) or die("Unable to execute query");
	if (!empty($results))
	{	
		$countquery = mysqli_fetch_array($results);
		$rows = $countquery[0];
		$lastpage = ceil($rows/$results_per_page);
		if ($ctbanpage < 1)
		{
			$ctbanpage = 1;
		}
		elseif ($ctbanpage > $lastpage)
		{
			$ctbanpage = $lastpage;
		}
 
		echo "<p>";
		echo "<br>";
		if ($ctbanpage != 1)
		{
			echo " <a class='pg'; href='{$_SERVER['PHP_SELF']}?ctbanpage=1'> First</a> ";
			echo " ";
			$previouspage = $ctbanpage - 1;
			echo " <a class='pg'; href='{$_SERVER['PHP_SELF']}?ctbanpage=$previouspage'>&laquo; Previous</a> ";
		}
		if ($ctbanpage != $lastpage)
		{
			if ($ctbanpage != 1)
			{
				echo " | ";
			}
			$nextpage = $ctbanpage + 1;
			echo " <a class='pg'; href='{$_SERVER['PHP_SELF']}?ctbanpage=$nextpage'>Next &raquo;</a> ";
			echo " ";
			echo " <a class='pg'; href='{$_SERVER['PHP_SELF']}?ctbanpage=$lastpage'>Last</a> ";
		}
		echo "</p>";
		
		if (!empty($_GET['search']) && $_GET['submit_search']=='Search') {
			
			$search = htmlspecialchars($_GET['search']);
			$search = mysqli_real_escape_string($dbh, $search);
			
			$paginated_query = "SELECT * FROM `" . $table_prefix . "CTBan_Log` WHERE (`perp_name` LIKE '%$search%') OR (`admin_name` LIKE '%$search%') OR (`perp_steamid` LIKE '%$search%') OR (`admin_steamid` LIKE '%$search%') OR (`reason` LIKE '%$search%') ORDER BY TIMESTAMP DESC LIMIT " .($ctbanpage - 1) * $results_per_page . "," . $results_per_page;
			$results = mysqli_query($dbh, $paginated_query) or die ("Unable to execute paginated query");
			
		}
		else {
			$paginated_query = "SELECT * FROM " . $table_prefix . "CTBan_Log ORDER BY TIMESTAMP DESC LIMIT " .($ctbanpage - 1) * $results_per_page . "," . $results_per_page;
			$results = mysqli_query($dbh, $paginated_query) or die ("Unable to execute paginated query");
		}
		
		print '<table id="bans">' . "\n";
		print "<tr class='h'><th>Name</th><th>Time</th><th>Length</th>"
			. "<th>Admin Name</th><th>Reason</th><th>Time Remaining</th></tr>\n";
			
		while ($row = mysqli_fetch_array($results))
		{
			$unbanme = "";
			if ($row["bantime"] > 0)
			{
				$bantime = $row["bantime"] . " min";
				if ($row["bantime"] >=60) {
					$bantime = round($row["bantime"]/60, 1, PHP_ROUND_HALF_UP) . " hrs";
				}
				elseif ($row["bantime"] >=1440) {
					$bantime = round($row["bantime"]/1440, 1, PHP_ROUND_HALF_UP) . " days";
				}
				if ($row["timeleft"] >= 0)	{
					$timeleft = $row["timeleft"] . " min";
					
					if ($row["timeleft"] >=60) {
						$timeleft = round($row["timeleft"]/60, 1, PHP_ROUND_HALF_UP) . " hrs";
					}
					elseif ($row["timeleft"] >=1440) {
						$timeleft = round($row["timeleft"]/1440, 1, PHP_ROUND_HALF_UP) . " days";
					}
				}
				else	{
					$timeleft = "Expired";
				}
			}
			else
			{
				$bantime = "Permanent";
				if ($row["timeleft"] >= 0)
				{
					$timeleft = "Permanent";
				}
				else
					$timeleft = "Unbanned";
			}
			
			if ($timeleft > 0)
			{
				$text_color = "#ff6600";
			}
			elseif ($timeleft == "Expired" or $timeleft == "Unbanned")
			{
				$text_color = "green";
			}
			elseif ($timeleft == "Permanent")
			{
				$text_color = "red";
				$bantime = "<span style='color:red;'>Permanent</span>";
			}
			
			print "<tr title='Details' onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}?banid=" . $row['ban_id'] . "';" . '"'. ">
				<td><b>" . utf8_encode($row["perp_name"])
				. "</b></td><td>" . date('j. n. Y  H:i', $row["timestamp"])
				. "</td><td>" . $bantime
				. "</td><td>" . utf8_encode($row["admin_name"])
				. "</td><td><b>" . utf8_encode($row["reason"])
				. "</b></td><td style='color:" . $text_color . ";'>" . $timeleft . "</td></tr>\n";
		}
		print "</table>\n";
		echo "<br>";
		echo "<p>Page " . strval($ctbanpage) . " of " . $lastpage . "<br><br>";
		
		echo "Total " . $rows . " bans</p>";
	} else {
		print "No Results\n";
	}
}
try
{
	$dbh = mysqli_connect($server,$username,$password);
	if (!$dbh) {
		print "Unable to connect to database server with specified parameters\n";
	}
	else {
		mysqli_select_db($dbh, $database) or die("Unable to select specified database");
		
		mysqli_set_charset($dbh, "utf8");
		
		$query = "SELECT COUNT(*) FROM " . $table_prefix . "CTBan_Log";
		if (empty($_GET['ctbanpage']))
		{
			$ctbanpage = 1;
		}
		else
		{
			$ctbanpage = $_GET['ctbanpage'];
		}
		
		if (!empty($_GET['banid'])) {
			
			$banid = htmlspecialchars($_GET['banid']);
			
			$banid = mysqli_real_escape_string($dbh, $banid);
			
			$result_q = mysqli_query($dbh, "SELECT * FROM `" . $table_prefix . "CTBan_Log` WHERE `ban_id` = '$banid'");
			$row_q = mysqli_fetch_array($result_q);
				
			if (empty($row_q)) {
					
				echo "<br><p><center><b><span style='color:red;font-size:16px;'>No Result (error 404)</span></b></center></p>";
				echo "<br><br><table style='text-align:center;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button class='button' onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}';" . '"'. "><span style='font-size:18px;'>Back</span></button></th></tr></table>";
			}
			else {
					
				if ($row_q["bantime"] > 0)
				{
					$bantime = $row_q["bantime"] . " min";
					if ($row_q["bantime"] >=60) {
						$bantime = round($row_q["bantime"]/60, 1, PHP_ROUND_HALF_UP) . " hrs";
					}
					elseif ($row_q["bantime"] >=1440) {
						$bantime = round($row_q["bantime"]/1440, 1, PHP_ROUND_HALF_UP) . " days";
					}
					if ($row_q["timeleft"] >= 0)	{
						$timeleft = $row_q["timeleft"] . " min";
					
						if ($row_q["timeleft"] >=60) {
							$timeleft = round($row_q["timeleft"]/60, 1, PHP_ROUND_HALF_UP) . " hrs";
						}
						elseif ($row_q["timeleft"] >=1440) {
							$timeleft = round($row_q["timeleft"]/1440, 1, PHP_ROUND_HALF_UP) . " days";
						}
					}
					else	{
						$timeleft = "Expired";
					}
				}
				else
				{
					$bantime = "Permanent";
					if ($row_q["timeleft"] >= 0)
					{
						$timeleft = "Permanent";
					}
					else
						$timeleft = "Unbanned";
				}
			
				if ($timeleft > 0)
				{
					$text_color = "#ff6600";
				}
				elseif ($timeleft == "Expired" or $timeleft == "Unbanned")
				{
					$text_color = "green";
				}
				elseif ($timeleft == "Permanent")
				{
					$text_color = "red";
					$bantime = "<span style='color:red;'>Permanent</span>";
				}
				
				$sid = $row_q['perp_steamid'];
				$count_query = mysqli_query($dbh, "SELECT COUNT(*) FROM `" . $table_prefix . "CTBan_Log` WHERE `perp_steamid` = '$sid'");
				$bans_count = mysqli_fetch_array($count_query);
			
				print "<br><br>";
				print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><h1><span>Player: " . utf8_encode($row_q['perp_name']) . "</span></h1></th></tr></table>";
				print "<br>";
				print "<table id='spec'>\n";
				print "<tr><td><b>Name</b></td><td>" . utf8_encode($row_q["perp_name"]) . "</td></tr>\n";
				print "<tr><td><b>SteamID</b></td><td>" . $row_q["perp_steamid"] . "</td></tr>\n";
				print "<tr><td><b>Time</b></td><td>" . date('j. n. Y  H:i', $row_q["timestamp"]) . "</td></tr>\n";
				print "<tr><td><b>Length</b></td><td>" . $bantime . "</td></tr>\n";
				print "<tr><td><b>Admin Name</b></td><td>" . utf8_encode($row_q["admin_name"]) . "</td></tr>\n";
				print "<tr><td><b>Admin SteamID</b></td><td>" . utf8_encode($row_q["admin_steamid"]) . "</td></tr>\n";
				print "<tr><td><b>Reason</b></td><td>" . utf8_encode($row_q["reason"]) . "</td></tr>\n";
				print "<tr><td><b>Time Remaining</b></td><td style='color:" . $text_color . ";'>" . $timeleft . "</td></tr>\n";
				print "<tr><td><b>Bans Count</b></td><td>" . $bans_count[0] . "</td></tr>\n";
				print "</table>\n";
				print "<br><br>";
				print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button class='button' onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}';" . '"'. "><span style='font-size:18px;'>Back</span></button></th></tr></table>";
				print "<br><br><br><br><br>";
			}
		}
		else {
			show_ctban_table($dbh, $query, $results_per_page, $ctbanpage, $table_prefix, $database);
		}
	}
}
catch (Exception $e)
{
	die($e);
}
mysqli_close($dbh);
 
?>

<button onclick=smoothscroll() id="scrollUp" title="Hore"><i class="fa fa-arrow-circle-o-up" style="font-size:20px"></i></button>

<footer class='footer'><span style="float:left"><a id="social" href="#" class="fa fa-instagram" style="font-size:16px"></a> <a id="social" href="#" class="fa fa-facebook-square" style="font-size:16px"></a> <a id="social" href="#" class="fa fa-twitter-square" style="font-size:16px"></a> <a id="social" href="#"  class="fa fa-linkedin-square" style="font-size:16px"></a></span>&#169; Copyright 2017-2018, code by <a class='dream' href='https://www.overgame.eu'>DreaM</a>, All rights reserved.<!--<span style="float:right"><a id="page_up" onClick=smoothscroll() class="fa fa-arrow-circle-o-up" style="font-size:16px"></a></span>--></footer>

</div>
</div>
</body>
</html>	