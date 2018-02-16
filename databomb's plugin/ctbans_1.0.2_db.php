<!--
DreaM  Copyright (C) 2018 Daniel Kristl
	
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
<link rel="icon" href="xxxxxxxx" sizes="32x32" />
<title>
OverGame | CTBanlist
</title>
<style type="text/css">
body {background-color: #f2f2f2; color: #222;}
body, td, th, h1, h2 {font-family: sans-serif;}
pre {margin: 0px; font-family: monospace;}
.pg {
	text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
	background-color: #3473c1;
    color: white;
	border: 1px solid #3473c1;
}
.pg:hover {background-color: white;
    color: #3473c1;
	border: 1px solid #3473c1;
	}
table {border-collapse: collapse;}
.center {text-align: center;}
.center table { margin-left: auto; margin-right: auto; text-align: center;}
.center th { text-align: center !important; }
td, th { border: 1px solid #fff; font-size: 75%; vertical-align: baseline;}
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

<h2>OverGame.eu | JailBreak CT Bany</h2>
<div class="center">
<div class="container" onclick="openNav()">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div><br><br>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">BanList</a>
  <a href="#">Unban</a>
  <a href="#">HLstatS</a>
</div>

<div class="center">
 
 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for SteamID, Name, Admin Name, Reason.." title="Type in a SteamID"><br>
 
<script>

//Search
function myFunction() {
  var input, filter, table, tr, td, td2, td3, td4, td5, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
	td2 = tr[i].getElementsByTagName("td")[1];
	td3 = tr[i].getElementsByTagName("td")[4];
	td4 = tr[i].getElementsByTagName("td")[5];
	td5 = tr[i].getElementsByTagName("td")[6];
    if (td || td2 || td3 || td4) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1 || td3.innerHTML.toUpperCase().indexOf(filter) > -1 || td4.innerHTML.toUpperCase().indexOf(filter) > -1 || td5.innerHTML.toUpperCase().indexOf(filter) > -1) {
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
    document.body.style.backgroundColor = "#f2f2f2";
}

//Menu Button (disabled)
function myButton(x) {
    x.classList.toggle("change");
}
</script>

<?php

$server="";
$username="";
$password="";
$database="";
 
$results_per_page="15";

function show_ctban_table($dbh, $query, $results_per_page, $ctbanpage, $table_prefix, $database)
{
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

		print '<table id="myTable" border="0" cellpadding="10" width=90%>' . "\n";
		print "<tr class='h'><th>SteamID</th><th>Name</th><th>Time</th><th>Duration</th>"
			. "<th>Admin Name</th><th>Admin SteamID</th><th>Reason</th><th>Time Remaining</th></tr>\n";

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
				$bantime = $row["bantime"] . "min";
				if ($row["bantime"] >=60) {
					$bantime = round($row["bantime"]/60, 1, PHP_ROUND_HALF_UP) . " hrs";
				}
				if ($row["bantime"] >=1536) {
					$bantime = round($row["bantime"]/1536, 1, PHP_ROUND_HALF_UP) . " days";
				}
				if ($row["timeleft"] >= 0)
				{
					$timeleft = $row["timeleft"] . "min";
				}
				if ($row["timeleft"] >=60) {
					$timeleft = round($row["timeleft"]/60, 1, PHP_ROUND_HALF_UP) . " hrs";
				}
				if ($row["timeleft"] >=1536) {
					$timeleft = round($row["timeleft"]/1536, 1, PHP_ROUND_HALF_UP) . " days";
				}
				else
					$timeleft = "Expired";
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
			
			print "<tr><td class='" . $classtext ."'>" . $row["perp_steamid"]
				. "</td><td class='" . $classtext ."'>" . utf8_encode($row["perp_name"]) 
				. "</td><td class='" . $classtext . "'>" . date('r', $row["timestamp"]) . "</td>" 
				. "<td class='" . $classtext ."'>" . $bantime
				. "</td><td class='" . $classtext . "'>" . utf8_encode($row["admin_name"])
				. "</td><td class='" . $classtext . "'>" . $row["admin_steamid"]
				. "</td><td class='" . $classtext . "'>" . utf8_encode($row["reason"])
				. "</td><td class='" . $classtext . "' style='color:" . $text_color . ";'>" . $timeleft . "</td></tr>\n";
		}
		print "</table>\n";

		echo "<br>";
		echo "<p>Page " . strval($ctbanpage) . " of " . $lastpage . "<br><br>";
		echo "Total CTBans: " . $rows . "</p>";
	} else {
		print "No results\n";
	}
}

try
{
$dbh = mysqli_connect($server,$username,$password);
if (!$dbh) {
	print "Unable to connect to database server with specified parameters\n";
} else {
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
		show_ctban_table($dbh, $query, $results_per_page, $ctbanpage, $table_prefix, $database);

}
}
catch (Exception $e)
{
	die($e);
}

mysqli_close($dbh);
 
?>

<footer class='footer'>&#169; Copyright 2018, code by <a class='dream' href='https://www.overgame.eu'>DreaM</a>, All rights reserved.</footer>

</div>
</div>
</body>
</html>	