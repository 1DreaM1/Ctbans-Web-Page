<!--
CtBans  Copyright (C) 2017-2018 1DreaM
	
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
<link rel="icon" href="___________________CHANGE THIS to your link____________________" sizes="32x32" />
<title>
Jailbreak | CTBans
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

button {
	text-decoration: none;
    display: inline-block;
    padding: 10px;
	background-color: #3473c1;
    color: white;
	border: 1px solid #3473c1;
	transition: 0.4s;
	width: 15%;
}
button:hover {background-color: white;
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
    padding-top: 10px;
    padding-bottom: 10px;
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
.footer { font-size: 80%;}
.p {text-align: left;}
.e {background-color: #f9f9f9; color: #000000; }
.h {background-color: #a5a2a2; font-weight: bold; color: #000000; font-size: 125%;}
.v {background-color: #e2e2e2; color: #000000; } 
.vr {background-color: #cccccc; text-align: right; color: #000000;}
img {float: right; border: 0px;}
hr {width: 600px; background-color: #cccccc; border: 0px; height: 1px; color:#000000;}
#myInput {
  background-image: url('/img/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 85%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
.sidenav a:hover {
    color: #f1f1f1;
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
#main {
    transition: margin-left .5s;
    padding: 16px;
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
.footer {
	left: 0;
	right: 0;
	padding: 10px;
	color: white;
	overflow: hidden;
    background-color: #333;
    position: fixed;
    bottom: 0;
    width: 100%;
}
.dream {
	color: #5542ff;
	text-decoration: none;
}
.dream:hover {
	color: red;
	text-decoration: underline;
}
</style>
</head>
<body>
<div id="main">

<h2>Jailbreak | CTBans</h2>
<div class="center">
<div class="container" onclick="openNav()">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div><br><br>
</div>

<div id="mySidenav" class="sidenav">
  <a target="_blank"	href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a target="_blank"	href="_____LINK_____">Home</a>
  <a target="_blank"	href="_____LINK_____">BanList</a>
  <a target="_blank"	href="_____LINK_____">Unban</a>
  <a target="_blank"	href="_____LINK_____">HLstatS</a>
</div>

<div class="center">
 
<script>
//Search
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
//SideBar
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
//Menu Button (disabled)
function myButton(x) {
    x.classList.toggle("change");
}
</script>

<?php

$server="_____HOST_____";
$username="_____USER_____";
$password="_____PSWRD_____";
$database="_____DB_____";
 
$results_per_page="15";

ini_set('default_charset', 'utf-8');

function show_ctban_table($dbh, $query, $results_per_page, $ctbanpage, $table_prefix, $database)
{
	print "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for SteamID, Name, Admin Name, Reason..' title='Type in a SteamID'><br>";
	
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
			echo " <a class='pg'; href='{$_SERVER['PHP_SELF']}?ctbanpage=$previouspage'> Previous</a> ";
		}
		if ($ctbanpage != $lastpage)
		{
			if ($ctbanpage != 1)
			{
				echo " | ";
			}
			$nextpage = $ctbanpage + 1;
			echo " <a class='pg'; href='{$_SERVER['PHP_SELF']}?ctbanpage=$nextpage'>Next</a> ";
			echo " ";
			echo " <a class='pg'; href='{$_SERVER['PHP_SELF']}?ctbanpage=$lastpage'>Last</a> ";
		}
		echo "</p>";
		$paginated_query = "SELECT * FROM " . $table_prefix . "CTBan_Log ORDER BY TIMESTAMP DESC LIMIT " .($ctbanpage - 1) * $results_per_page . "," . $results_per_page;
		$results = mysqli_query($dbh, $paginated_query) or die ("Unable to execute paginated query");
		print '<table id="bans">' . "\n";
		print "<tr class='h'><th>Name</th><th>Time</th><th>Length</th>"
			. "<th>Admin Name</th><th>Reason</th><th>Time Remaining</th></tr>\n";
		$counter = 0;
		while ($row = mysqli_fetch_array($results))
		{
			$counter = $counter + 1;
			if ($counter % 2)
				$classtext = "e";
			else
				$classtext = "v";
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
			
			print "<tr onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}?banid=" . $row['ban_id'] . "';" . '"'. ">
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
		
		echo "Totoal " . $rows . " bans</p>";
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
			if (strstr($banid, 'j') != false || strstr($banid, 'o') != false) {
				echo "<br><p><center><b><span style='color:red;font-size:16px;'>Wrong argument</span></b></center></p>";
				echo "<br><br><table style='text-align:center;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}';" . '"'. "><span style='font-size:18px;'>Back</span></button></th></tr></table>";
			}
			else {
				$result_q = mysqli_query($dbh, "SELECT * FROM `CTBan_Log` WHERE `ban_id` = '$banid'");
				$row_q = mysqli_fetch_array($result_q);
				
				if (empty($row_q)) {
					
					echo "<br><p><center><b><span style='color:red;font-size:16px;'>No Result (error 404)</span></b></center></p>";
					echo "<br><br><table style='text-align:center;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}';" . '"'. "><span style='font-size:18px;'>Back</span></button></th></tr></table>";
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
					print "</table>\n";
					print "<br><br>";
					print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}';" . '"'. "><span style='font-size:18px;'>Back</span></button></th></tr></table>";
				}
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

<footer class='footer'>&#169; Copyright, code by <a class='dream' href='https://www.overgame.eu'>DreaM</a>, All rights reserved.</footer>

</div>
</div>
</body>
</html>	