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
<?php
require_once("ctbans_settings.php");

if(isset($_SESSION['login_user'])){
	require('ctbans_session.php');
}
else {
	require('ctbans_login.php'); // Includes Login Script
}

$server=DB_HOST;
$username=DB_USER;
$password=DB_PASS;
$database=DB_NAME;
$table_prefix=DB_PREFIX;
 
$results_per_page=RESULTS;

try
{
	$dbh = mysqli_connect($server,$username,$password);
	if (!$dbh) {
		print "Unable to connect to database server with specified parameters\n";
	}
	else {
		mysqli_select_db($dbh, $database) or die("Unable to select specified database");
		mysqli_set_charset($dbh, "utf8");
	}
	
}
catch (Exception $e)
{
	die($e);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="description" content="OverGame.eu CTBanlist">
<meta name="keywords" content="bans,ctbans,overgame,ctbany,csgo,csko,cs,ct">
<meta name="author" content="DreaM (support@overgame.eu)">
<link rel="icon" href="https://overgame.eu/wp-content/uploads/2017/12/CS-GO-150x150.png" sizes="32x32" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>
<?php echo PAGE_NAME; ?>
</title>
<style type="text/css">
body {background-color: <?php echo PG_BACK . ";"; ?> color: #222;}
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
	background-color: <?php echo SEARCH_COLOR . ";"; ?>
    color: white;
	border: 1px solid <?php echo SEARCH_COLOR . ";"; ?>
	transition: 0.4s;
	width: 14%;
}
input[type=submit]:hover {background-color: white;
    color: <?php echo SEARCH_COLOR . ";"; ?>
	border: 1px solid <?php echo SEARCH_COLOR . ";"; ?>
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
    background-color: <?php echo TABLE_COLOR . ";"; ?>
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
  width: 75%;
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
  background-color: <?php echo HD_BACK . ";"; ?>
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
  padding: <?php echo M_SIZE_TOP . " " . M_SIZE_SIDE; ?>;
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
  background-color: <?php echo HB_COLOR . ";"; ?>
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
    top: <?php if (isset($_SESSION['login_user'])) { echo "450px;"; } else { echo "330px;"; } ?>
    background-color: <?php echo SID_1_COLOR . ";"; ?>
}

#id_2 {
    top: <?php if (isset($_SESSION['login_user'])) { echo "510px;"; } else { echo "390px;"; } ?>
    background-color: <?php echo SID_2_COLOR . ";"; ?>
}

#sid_login {
    top: 245px;
	cursor: pointer;
    background-color: <?php echo SID_LOGIN_COLOR . ";"; ?>
}

#admin_1 {
    top: 305px;
	cursor: pointer;
    background-color: Gray;
}

#admin_2 {
    top: 365px;
	cursor: pointer;
    background-color: Gray;
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
a {
	color: blue;
	text-decoration: none;
}

a:hover {
	text-decoration: none;
	color: red;
	transition: 0.3s;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.button2 {
    text-decoration: none;
    display: inline-block;
    padding: 12px;
	font-size: 16px;
	font-weight: bold;
	background-color: #3473c1;
    color: white;
	border: 1px solid #3473c1;
	transition: 0.4s;
	width: 100%;
}

.button2:hover {
	background-color: white;
	color: #3473c1;
	border: 1px solid #3473c1;
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
	text-decoration: none;
    display: inline-block;
    padding: 12px;
	width: 15%;
	font-size: 16px;
	background-color: #f44336;
    color: white;
	border: 1px solid #f44336;
	transition: 0.4s;
}

.cancelbtn:hover {
	background-color: white;
	color: #f44336;
	border: 1px solid #f44336;
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.container2 {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 35%; /* Could be more or less, depending on screen size */
}

.modal-content-admin {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

input[type=checkbox] {
	margin-top: 15px;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

.edit {
	text-decoration: none;
    display: inline-block;
    padding: 6px;
	background-color: #2184ff;
    color: white;
	border: 1px solid #2184ff;
	transition: 0.4s;
	width: 14%;
}
.edit:hover {background-color: white;
    color: #2184ff;
	border: 1px solid #2184ff;
}

.delete {
	text-decoration: none;
    display: inline-block;
    padding: 6px;
	background-color: #f94a4a;
    color: white;
	border: 1px solid #f94a4a;
	transition: 0.4s;
	width: 14%;
}
.delete:hover {background-color: white;
    color: #f94a4a;
	border: 1px solid #f94a4a;
}

.btn_edit {
	text-decoration: none;
    display: inline-block;
    padding: 10px;
	background-color: #2184ff;
    color: white;
	border: 1px solid #2184ff;
	transition: 0.4s;
	width: 15%;
}
.btn_edit:hover {background-color: white;
    color: #2184ff;
	border: 1px solid #2184ff;
}

.btn_del {
	text-decoration: none;
    display: inline-block;
    padding: 10px;
	background-color: #f94a4a;
    color: white;
	border: 1px solid #f94a4a;
	transition: 0.4s;
	width: 15%;
}
.btn_del:hover {background-color: white;
    color: #f94a4a;
	border: 1px solid #f94a4a;
}

.alert {
	position: fixed;
	top: 6px;
	right: 3px;
	left: 3px;
    padding: 12px;
    background-color: #FE2424;
    color: white;
	opacity: 0.8;
    transition: opacity 0.6s;
	border-radius: 4px;
}

.alert a {
	color: black;
}

.alert a:hover {
	color: white;
	transition: 0.4s;
}

.alertclose {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.alertclose:hover {
    color: black;
}
</style>
</head>
<body>

<?php

if (DISPLAY_ALERT == true && $OUT_OF_DATE == true) {
	
	print	'<div class="alert">
				<span class="alertclose" onclick="this.parentElement.style.display=' . "'" . 'none' . "'" . ';">&times;</span> 
				<center><strong><span style="float:left;">Alert !</span></strong> Your Ctbans version is out of date ! Go for update <a href="https://github.com/1DreaM1/Ctbans-Web-Page"><b>Here</b></a> !<center>
			</div>';
}

?>

<?php 
if (SCROLL_INDICATOR == true) {
	print "<div class='progress'>
				<div class='progress-container'>
					<div class='progress-bar' id='myBar'></div>
				</div>  
			</div>";
}
?>

<div id="header">
	<h2><span style="color:<?php echo HD_TEXT_1; ?>;"><?php echo PAGE_HEADER; ?></span></h2>
	<?php if (ENAB_SUB == true) {
		print "<p><span style='color: " . HD_TEXT_2 . ";'> " . SUB_HEADER . "</span></p>";
	}?>
</div>

<!-- Top navigation -->
<div id="navbar">
	<div class="topnav">

	<!-- Centered link -->
	<div class="topnav-centered">
		<a id="defaultOpen" href="<?php echo $_SERVER['PHP_SELF'] ?>" class="active">⁞ <?php echo MENU_H_NAME; ?> ⁞</a>
	</div>
  
	<!-- Left-aligned links (default) -->
	<div class="topnav-left">
		<a style="border-left:0px;" href="<?php echo BTN_1_LINK; ?>"><?php echo BTN_1_NAME; ?></a>
		<?php if(BTN_2_ENABLE == true) { echo '<a href="' . BTN_2_LINK . '">' . BTN_2_NAME . '</a>'; } ?>
		<?php if(BTN_3_ENABLE == true) { echo '<a href="' . BTN_3_LINK . '">' . BTN_3_NAME . '</a>'; } ?>
	</div>
  
	<!-- Right-aligned links -->
	<div class="topnav-right">
		<?php if(BTN_6_ENABLE == true) { echo '<a href="' . BTN_6_LINK . '">' . BTN_6_NAME . '</a>'; } ?>
		<?php if(BTN_5_ENABLE == true) { echo '<a href="' . BTN_5_LINK . '">' . BTN_5_NAME . '</a>'; } ?>
		<a style="border-right:0px;" href="<?php echo BTN_4_LINK; ?>"><?php echo BTN_4_NAME; ?></a>
	</div>
	</div>
</div>

<?php

if (SIDEBAR_LOGIN == true) {
	if (isset($_SESSION['login_user'])){
			$login_name = "Logout";
			$lg_icon = "power_settings_new";
			$onClick = '"' . "document.location.href='ctbans_logout.php'" . '"';
			$sid_admin = "<a onClick=".'"'."document.getElementById('add_admin').style.display='block'".'"'." id='admin_1'>Admins<i style='float:right;' class='material-icons' style='font-size:36px'>supervisor_account</i></a>
							<a onClick=".'"'."document.getElementById('add_ban').style.display='block'".'"'." id='admin_2'>Bans<i style='float:right;' class='material-icons' style='font-size:36px'>lock</i></a>";
		}
		else {
			$login_name = "Login";
			$lg_icon = SID_LOGIN_ICON;
			$onClick = '"' . "document.getElementById('id01').style.display='block'" . '"';
			$sid_admin = "";
		}
		
		print "<div id='Sidenav' class='sidenav'>
				<a onClick=" . $onClick . " id='sid_login'>" . $login_name . "<i style='float:right;' class='material-icons' style='font-size:36px'>" . $lg_icon . "</i></a>
				
				" . $sid_admin;
}

if (SIDEBAR_ENABLE == true) {
	
	if (SIDEBAR_LOGIN == false) {
		print	"<div id='Sidenav' class='sidenav'>";
	}
	
	print	"<a href='" . SID_1_LINK . "' id='id_1'>" . SID_1_NAME . "<i style='float:right;' class='material-icons' style='font-size:36px'>" . SID_1_ICON . "</i></a>
			<a href='" . SID_2_LINK . "' id='id_2'>" . SID_2_NAME . "<i style='float:right;' class='material-icons' style='font-size:36px'>" . SID_2_ICON . "</i></a>
			</div>";
}
?>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container2">
	<h1 style="text-align:center;margin-bottom:35px;">Login</h1>
	
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" <?php if (isset($_COOKIE['member_ct_login'])) { echo "value='" . $_COOKIE['member_ct_login'] . "'"; } ?> name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" <?php if (isset($_COOKIE['member_ct_login'])) { echo "value='" . $_COOKIE['member_ct_password'] . "'"; } ?> name="psw" required>
        
      <button class="button2" type="submit" name="login_btn">Login</button>
      <label>
        <input type="checkbox" <?php if(isset($_COOKIE["member_ct_login"])) { echo "checked='checked'"; } ?> name="remember"> Remember me
      </label>
    </div>

    <div class="container2" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="width:20%;">Cancel</button>
      <!--<span class="psw">Forgot <a href="#">password ?</a></span>-->
    </div>
  </form>
</div>

<?php if (isset($error)) {echo "<br><br><br><br><center>" . $error . "</center>";}

if (isset($_SESSION['login_user'])) {
	
	print "<center>You are logged in as <b>" . $_SESSION['login_user'] . "</b>.</center>";
	
}

if (isset($inf_msg)) {
	print $inf_msg;
}
?>

<br><br><br><br>

<!-- ADMINS -->
<div id="add_admin" class="modal" <?php if ((isset($_GET['adminid']) || isset($_POST['add_admin']) || isset($_POST['add_admin_btn'])) && isset($_SESSION['login_user'])) { echo "style='display:block;'"; } ?>>
  
  <form class="modal-content-admin animate" action="" method="post">
    <div class="imgcontainer">
      <span onClick="document.location='<?php echo $_SERVER['PHP_SELF']; ?>'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container2">
	<h1 style="text-align:center;margin-bottom:35px;">Admins</h1>
	
	<?php
	
	$q_add_admin = mysqli_query($dbh, "SELECT * FROM `CTBan_Login`");
	
	if (isset($_GET['adminid']) && isset($_SESSION['login_user'])) {
		
		$ad_id = $_GET['adminid'];
		$ad_id = htmlspecialchars($ad_id);
		$ad_id = mysqli_real_escape_string($dbh, $ad_id);
		$ad_id = trim($ad_id);
		$ad_id = stripslashes($ad_id);
		$q_add_admin = mysqli_query($dbh, "SELECT * FROM `CTBan_Login` WHERE `id`='$ad_id'");
		$row_add_admin = mysqli_fetch_array($q_add_admin);
		
		if (isset($_POST['edit']) && isset($_SESSION['login_user'])) {
			$input_user = "<input type='text' name='user' value='" . utf8_encode($row_add_admin['username']) . "' required>";
			$input_pass = "<input type='text' name='pass' value='" . utf8_encode($row_add_admin['password']) . "' required>";
		}
		else {
			
			if ($row_add_admin["id"] == $_SESSION['login_id'] || $_SESSION['login_id'] <= 1) {
				$input_user = utf8_encode($row_add_admin['username']);
				$input_pass = utf8_encode($row_add_admin['password']);
			}
			else {
				$input_user = utf8_encode($row_add_admin['username']);
				$input_pass = "**********";
			}
		}
		
		if (isset($_POST['delete']) && isset($_SESSION['login_user'])) {
			
		}
		elseif (isset($_POST['save']) && isset($_SESSION['login_user'])) {
			
			echo "<center><b><span style='padding:10px;color:#33cc33;'>Saved</span></b></center>";
		}
		else {
		
			print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><h1><span>Admin: " . utf8_encode($row_add_admin['username']) . "</span></h1></th></tr></table>";
			print '<table id="spec">' . "\n";
			print "<tr><td><b>Name</b></td><td>" . $input_user . "</td></tr>\n";
			print "<tr><td><b>Password</b></td><td>" . $input_pass . "</td></tr>\n";
			print "</table>\n";
			echo "<br><br>";
		
			if (isset($_POST['edit']) && isset($_SESSION['login_user'])) {
				print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button type='submit' name='save' value='" . $row_add_admin['id'] . "' class='edit'><span style='font-size:14px;'>Save</span></button></th></tr></table>";
			}
			else {
				
				if ($_GET['adminid'] == $_SESSION['login_id'] || $_SESSION['login_id'] <= 1) {
					print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button type='submit' name='edit' value='" . $row_add_admin['id'] . "' class='edit'><span style='font-size:14px;'>Edit</span></button> <button type='submit' name='delete' value='" . $row_add_admin['id'] . "' class='delete'><span style='font-size:14px;'>Delete</span></button></th></tr></table>";
				}
				else {
					print "<center><b>You do not have acces to edit or delete admins.</b></center>";
				}
			}
		}
	}
	elseif (isset($_POST['add_admin']) && isset($_SESSION['login_user'])) {
		
		print "<br>";
		print "<table id='spec'>\n";
		print "<tr><td><b>Name</b></td><td><input type='text' name='uname' required></td></tr>\n";
		print "<tr><td><b>Password</b></td><td><input type='text' name='pswrd' required></td></tr>\n";
		print "</table>\n";
		print "<br><br>";
		print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button type='submit' name='add_admin_btn' class='button'><span style='font-size:18px;'>Save</span></button></th></tr></table>";
		
	}
	elseif (isset($_POST['add_admin_btn']) && isset($_SESSION['login_user'])) {
			
		echo "<center><b><span style='padding:10px;color:#33cc33;'>Added</span></b></center>";
	}
	elseif (isset($_SESSION['login_user'])) {
	
		print '<table id="bans">' . "\n";
		print "<tr><th>ID</th><th>Name</th><th>Password</th></tr>\n";
	
		while ($row_add_admin = mysqli_fetch_array($q_add_admin)) {
			
			if ($row_add_admin["id"] == $_SESSION['login_id'] || $_SESSION['login_id'] <= 1) {
		
				print "<tr title='EDIT' onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}?adminid=" . $row_add_admin['id'] . "';" . '"'. ">
						<td>" . $row_add_admin["id"]. 
						"</td><td>" . utf8_encode($row_add_admin['username']) .  
						"</td><td>" . utf8_encode($row_add_admin['password']) . "</td></tr>\n";
			}
			else {
				print "<tr title='EDIT' onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}?adminid=" . $row_add_admin['id'] . "';" . '"'. ">
						<td>" . $row_add_admin["id"]. 
						"</td><td>" . utf8_encode($row_add_admin['username']) .  
						"</td><td>**********</td></tr>\n";
			}
		}
		print "</table>\n";
		echo "<br>";
	}
	
	if ($q_add_admin == false) {
		print "No Results\n";
	}
	
	if (isset($_POST['delete']) && isset($_SESSION['login_user'])) {
		$ad_id = $_POST['delete'];
		
		$ad_id = htmlspecialchars($ad_id);
		$ad_id = mysqli_real_escape_string($dbh, $ad_id);
		$ad_id = trim($ad_id);
		$ad_id = stripslashes($ad_id);
		
		if ($ad_id == 1) {
			echo "<center><b><span style='padding:10px;color:red;'>Unable to delete primary account</span></b></center>";
		}
		else {
			mysqli_query($dbh, "DELETE FROM `CTBan_Login` WHERE `id`='$ad_id'");
			echo "<center><b><span style='padding:10px;color:#33cc33;'>Deleted</span></b></center>";
			unset($_POST['delete']);
		}
	}
	
	if (isset($_POST['save']) && isset($_SESSION['login_user'])) {
		
		$ad_id = $_POST['save'];
		$ad_id = htmlspecialchars($ad_id);
		$ad_id = mysqli_real_escape_string($dbh, $ad_id);
		$ad_id = trim($ad_id);
		$ad_id = stripslashes($ad_id);
		
		$ad_user = $_POST['user'];
		$ad_user = htmlspecialchars($ad_user);
		$ad_user = mysqli_real_escape_string($dbh, $ad_user);
		$ad_user = trim($ad_user);
		$ad_user = stripslashes($ad_user);
		
		$ad_pass = $_POST['pass'];
		$ad_pass = htmlspecialchars($ad_pass);
		$ad_pass = mysqli_real_escape_string($dbh, $ad_pass);
		$ad_pass = trim($ad_pass);
		$ad_pass = stripslashes($ad_pass);
		
		mysqli_query($dbh, "UPDATE `CTBan_Login` SET `username`='$ad_user',`password`='$ad_pass'  WHERE `id`='$ad_id'");
		unset($_POST['save']);
	}
	
	if (isset($_POST['add_admin_btn']) && isset($_SESSION['login_user'])) {
		
		$add_uname = $_POST['uname'];
		$add_uname = htmlspecialchars($add_uname);
		$add_uname = mysqli_real_escape_string($dbh, $add_uname);
		$add_uname = trim($add_uname);
		$add_uname = stripslashes($add_uname);
		
		$add_pass = $_POST['pswrd'];
		$add_pass = htmlspecialchars($add_pass);
		$add_pass = mysqli_real_escape_string($dbh, $add_pass);
		$add_pass = trim($add_pass);
		$add_pass = stripslashes($add_pass);
		
		mysqli_query($dbh, "INSERT INTO `CTBan_Login`(`username`, `password`) VALUES ('$add_uname','$add_pass')");
		unset($_POST['add_admin_btn']);
	}
	
	?>
	
	</div>

    <div class="container2" style="background-color:#f1f1f1">
      <button type="button" onclick="document.location='<?php echo $_SERVER['PHP_SELF']; ?>'" class="cancelbtn">Cancel</button>
	  <?php if (isset($_POST['add_admin_btn']) || isset($_POST['add_admin']) || isset($_GET['adminid']) || $_SESSION['login_id'] > 1) { } else { echo '<form method="post"><button type="submit" name="add_admin" class="cancelbtn">Add</button></form>';} ?>
    </div>
  </form>
</div>

<!-- BANS -->
<div id="add_ban" class="modal" <?php if (isset($_POST['ban_save']) && isset($_SESSION['login_user'])) { echo "style='display:block;'"; } ?>>
  
  <div class="modal-content-admin animate">
    <div class="imgcontainer">
      <span onClick="document.location='<?php echo $_SERVER['PHP_SELF']; ?>'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container2">
	<h1 style="text-align:center;margin-bottom:35px;">Bans</h1>
	
	<?php
	if (isset($_POST['ban_save']) && isset($_SESSION['login_user'])) {
		
		echo "<center><b><span style='padding:10px;color:#33cc33;'>Saved</span></b></center>";
	}
	else {
		print "<br>";
		print '<form method="post">';
		print "<table id='spec'>\n";
		print "<tr><td><b>Name</b></td><td><input type='text' name='name' required></td></tr>\n";
		print "<tr><td><b>SteamID</b></td><td><input type='text' name='sid' required></td></tr>\n";
		print "<tr><td><b>Length</b></td><td><input type='text' name='length' required></td></tr>\n";
		print "<tr><td><b>Admin</b></td><td><input type='text' name='admin' required></td></tr>\n";
		print "<tr><td><b>Admin SteamID</b></td><td><input type='text' name='admin_sid' required></td></tr>\n";
		print "<tr><td><b>Reason</b></td><td><input type='text' name='reason' required></td></tr>\n";
		print "<tr><td><b>Time remaining</b></td><td><input type='text' name='remaining' required></td></tr>\n";
		print "</table>\n";
		print "<br><br>";
		print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button type='submit' name='ban_save' class='button'><span style='font-size:18px;'>Save</span></button></th></tr></table>";
		print '</form>';
	}
				
	if (isset($_POST['ban_save']) && isset($_SESSION['login_user'])) {
		date_default_timezone_set("UTC");
		$b_time = time();
		
		$b_name = $_POST['name'];
		$b_name = htmlspecialchars($b_name);
		$b_name = mysqli_real_escape_string($dbh, $b_name);
		$b_name = trim($b_name);
		$b_name = stripslashes($b_name);
		
		$b_sid = $_POST['sid'];
		$b_sid = htmlspecialchars($b_sid);
		$b_sid = mysqli_real_escape_string($dbh, $b_sid);
		$b_sid = trim($b_sid);
		$b_sid = stripslashes($b_sid);
		
		$b_length = $_POST['length'];
		$b_length = htmlspecialchars($b_length);
		$b_length = mysqli_real_escape_string($dbh, $b_length);
		$b_length = trim($b_length);
		$b_length = stripslashes($b_length);
		
		$b_admin = $_POST['admin'];
		$b_admin = htmlspecialchars($b_admin);
		$b_admin = mysqli_real_escape_string($dbh, $b_admin);
		$b_admin = trim($b_admin);
		$b_admin = stripslashes($b_admin);
		
		$b_admin_sid = $_POST['admin_sid'];
		$b_admin_sid = htmlspecialchars($b_admin_sid);
		$b_admin_sid = mysqli_real_escape_string($dbh, $b_admin_sid);
		$b_admin_sid = trim($b_admin_sid);
		$b_admin_sid = stripslashes($b_admin_sid);
		
		$b_reason = $_POST['reason'];
		$b_reason = htmlspecialchars($b_reason);
		$b_reason = mysqli_real_escape_string($dbh, $b_reason);
		$b_reason = trim($b_reason);
		$b_reason = stripslashes($b_reason);
		
		$b_remaining = $_POST['remaining'];
		$b_remaining = htmlspecialchars($b_remaining);
		$b_remaining = mysqli_real_escape_string($dbh, $b_remaining);
		$b_remaining = trim($b_remaining);
		$b_remaining = stripslashes($b_remaining);
		
		mysqli_query($dbh, "INSERT INTO `CTBan_Log`(`timestamp`,`perp_steamid`, `perp_name`, `admin_steamid`, `admin_name`, `bantime`, `timeleft`, `reason`) VALUES ('$b_time','$b_sid','$b_name','$b_admin_sid','$b_admin','$b_length','$b_remaining','$b_reason')");
		unset($_POST['delete']);
	}
	
	?>
	
    </div>

    <div class="container2" style="background-color:#f1f1f1">
      <button type="button" onclick="document.location='<?php echo $_SERVER['PHP_SELF']; ?>'" class="cancelbtn">Cancel</button>
    </div>
  </div>
</div>

<div id="main">

<div class="center">

<?php

function convertSteamIdToCommunityId($steamId) {
	if($steamId == 'STEAM_ID_LAN' || $steamId == 'BOT') {
		echo ("Cannot convert SteamID \"$steamId\" to a community ID.<br><br>");
	}
	if (preg_match('/^STEAM_[0-1]:[0-1]:[0-9]+$/', $steamId)) {
		$steamId = explode(':', substr($steamId, 8));
		$steamId = $steamId[0] + $steamId[1] * 2 + 1197960265728;
		return '7656' . $steamId;
	} elseif (preg_match('/^\[U:[0-1]:[0-9]+\]$/', $steamId)) {
		$steamId = explode(':', substr($steamId, 3, strlen($steamId) - 1));
		$steamId = $steamId[0] + $steamId[1] + 1197960265727;
		return '7656' . $steamId;
	} else {
		echo ("SteamID \"$steamId\" doesn't have the correct format.<br><br>");
	}
}

ini_set('default_charset', 'utf-8');

function show_ctban_table($dbh, $query, $results_per_page, $ctbanpage, $table_prefix, $database)
{
	
	if (SEARCH_ENABLE == true) {
		print "<form action='{$_SERVER['PHP_SELF']}' ><input type='text' id='myInput' name='search' placeholder='Search for SteamID, Name, Admin Name, Reason..' title='Type in a SteamID'>  <input type='submit' name='submit_search' value='" . SEARCH_NAME . "'></form><br><br>";
	}
	
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
		
		
		if (!empty($_GET['search']) && $_GET['submit_search']==SEARCH_NAME) {
			
			$search = htmlspecialchars($_GET['search']);
			$search = mysqli_real_escape_string($dbh, $search);
			$search = trim($search);
			$search = stripslashes($search);
			
			$paginated_query = "SELECT * FROM `" . $table_prefix . "CTBan_Log` WHERE (`perp_name` LIKE '%$search%') OR (`admin_name` LIKE '%$search%') OR (`perp_steamid` LIKE '%$search%') OR (`admin_steamid` LIKE '%$search%') OR (`reason` LIKE '%$search%') ORDER BY TIMESTAMP DESC LIMIT " .($ctbanpage - 1) * $results_per_page . "," . $results_per_page;
			$results = mysqli_query($dbh, $paginated_query) or die ("Unable to execute paginated query");
			
			$noresults = false;
			$res_check = mysqli_fetch_array($results);
			if ($res_check[0]==0) {
				$noresults = true;
			}
		}
		else {
			$paginated_query = "SELECT * FROM " . $table_prefix . "CTBan_Log ORDER BY TIMESTAMP DESC LIMIT " .($ctbanpage - 1) * $results_per_page . "," . $results_per_page;
			$results = mysqli_query($dbh, $paginated_query) or die ("Unable to execute paginated query");
			$noresults = false;
		}
		
		print '<table id="bans">' . "\n";
		print "<tr class='h'><th>Name</th><th>Time</th><th>Length</th>"
			. "<th>Admin name</th><th>Reason</th><th>Time remaining</th></tr>\n";
			
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
		if ($noresults==true) {
			print "<br><p><center><b><span style='color:red;font-size:16px;'>No results</span></b></center></p><br><br><br><br><br>";
		}
		else {
			echo "<p>Page " . strval($ctbanpage) . " of " . $lastpage . "<br><br>";
		
			echo "Total " . $rows . " bans.</p>";
		}
	} else {
		print "No bans\n";
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
			$banid = trim($banid);
			$banid = stripslashes($banid);
			
			$result_q = mysqli_query($dbh, "SELECT * FROM `" . $table_prefix . "CTBan_Log` WHERE `ban_id` = '$banid'");
			$row_q = mysqli_fetch_array($result_q);
				
			if (empty($row_q)) {
					
				echo "<br><p><center><b><span style='color:red;font-size:16px;'>No results(error 404)</span></b></center></p>";
				echo "<br><br><table style='text-align:center;margin-left:auto;margin-right:auto;width:90%;'><tr><th><button class='button' onclick=" . '"' . "window.location = '{$_SERVER['PHP_SELF']}';" . '"'. "><span style='font-size:18px;'>Back</span></button></th></tr></table><br><br><br><br><br><br><br><br><br><br><br><br>";
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
				
				print "<form method='post'>";
				
				if (isset($_POST['btn_edit']) && isset($_SESSION['login_user'])) {
					$ban_name = "<input type='text' name='ban_name' value='" . utf8_encode($row_q["perp_name"]) . "' required>";
					$ban_sid = "<input type='text' name='ban_sid' value='" . $row_q["perp_steamid"] . "' required>";
					$ban_time = "<input type='text' name='ban_time' value='" . $row_q["timestamp"] . "' required>";
					$ban_length = "<input type='text' name='ban_length' value='" . $row_q["bantime"] . "' required>";
					$ban_admin = "<input type='text' name='ban_admin' value='" . utf8_encode($row_q["admin_name"]) . "' required>";
					$ban_admin_sid = "<input type='text' name='ban_admin_sid' value='" . $row_q["admin_steamid"] . "' required>";
					$ban_reason = "<td><input type='text' name='ban_reason' value='" . utf8_encode($row_q["reason"]) . "' required></td>";
					$ban_left = "<td><input type='text' name='ban_left' value='" . $row_q["bantime"] . "' required></td>";
				}
				else {
					$ban_name = utf8_encode($row_q["perp_name"]);
					$ban_sid = "<a href='https://steamcommunity.com/profiles/" . convertSteamIdToCommunityId($row_q["perp_steamid"]) . "'>" . $row_q["perp_steamid"] . "</a>";
					$ban_time = date('j. n. Y  H:i', $row_q["timestamp"]);
					$ban_length = $row_q["bantime"];
					$ban_admin = utf8_encode($row_q["admin_name"]);
					$ban_admin_sid = "<a href='https://steamcommunity.com/profiles/" . convertSteamIdToCommunityId($row_q["admin_steamid"]) . "'>" . $row_q["admin_steamid"] . "</a>";
					$ban_reason = "<td>" . utf8_encode($row_q["reason"]) . "</td>";
					$ban_left = "<td style='color:" . $text_color . ";'>" . $timeleft . "</td>";
				}
			
				print "<br><br>";
				print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th><h1><span>Player: " . utf8_encode($row_q['perp_name']) . "</span></h1></th></tr></table>";
				print "<br>";
				print "<table id='spec'>\n";
				print "<tr><td><b>Name</b></td><td>" . $ban_name . "</td></tr>\n";
				print "<tr><td><b>SteamID</b></td><td>" . $ban_sid . "</td></tr>\n";
				print "<tr><td><b>Time</b></td><td>" . $ban_time . "</td></tr>\n";
				print "<tr><td><b>Length</b></td><td>" . $ban_length . "</td></tr>\n";
				print "<tr><td><b>Admin</b></td><td>" . $ban_admin . "</td></tr>\n";
				print "<tr><td><b>Admin SteamID</b></td><td>" . $ban_admin_sid . "</td></tr>\n";
				print "<tr><td><b>Reason</b></td>" . $ban_reason . "</tr>\n";
				print "<tr><td><b>Time remaining</b></td>" . $ban_left . "</tr>\n";
				print "<tr><td><b>Bans count</b></td><td>" . $bans_count[0] . "</td></tr>\n";
				print "</table>\n";
				print "<br><br>";
				
				if (isset($_SESSION['login_user'])) {
					print "<table style='text-align:left;margin-left:auto;margin-right:auto;width:90%;'><tr><th>";
					
					if (isset($_POST['btn_edit'])) {
						print " <button class='btn_edit' name='btn_save' value='" . $row_q['ban_id'] . "'><span style='font-size:18px;'>Save</span></button>";
					}
					else {
					print " <button class='btn_edit' name='btn_edit' value='" . $row_q['ban_id'] . "'><span style='font-size:18px;'>Edit</span></button>";
					print " <button class='btn_del' name='btn_del' value='" . $row_q['ban_id'] . "'><span style='font-size:18px;'>Delete</span></button>";
					}
					
					print "</th></tr></table>";
					print "<br><br>";
				}
				
				print "</form>";
				
				if (isset($_POST['btn_del']) && isset($_SESSION['login_user'])) {
					$ban_del_id = $_POST['btn_del'];
					
					$ban_del_id = htmlspecialchars($ban_del_id);
					$ban_del_id = mysqli_real_escape_string($dbh, $ban_del_id);
					$ban_del_id = trim($ban_del_id);
					$ban_del_id = stripslashes($ban_del_id);
		
					mysqli_query($dbh, "DELETE FROM `CTBan_Log` WHERE `ban_id`='$ban_del_id'");
					unset($_POST['btn_del']);
					print '<div id="add_ban" class="modal" style="display:block;">
							<form class="modal-content-admin animate" action="" method="post">
							<div class="imgcontainer">
								<span onClick="document.location=' . "'" . $_SERVER['PHP_SELF'] . "'" . '" class="close" title="Close Modal">&times;</span>
							</div>

							<div class="container2">
								<h1 style="text-align:center;margin-bottom:35px;">Bans</h1>
								<center><b><span style="padding:10px;color:#33cc33;">Deleted</span></b></center>
							</div>

							<div class="container2" style="background-color:#f1f1f1">
								<button type="button" onclick="document.location=' . "'" . $_SERVER['PHP_SELF'] . "'" . '" class="cancelbtn">Cancel</button>
							</div>
							</form>
							</div>';
				}
				
				if (isset($_POST['btn_save']) && isset($_SESSION['login_user'])) {
					$ban_save_id = $_POST['btn_save'];
		
					$ban_save_id = htmlspecialchars($ban_save_id);
					$ban_save_id = mysqli_real_escape_string($dbh, $ban_save_id);
					$ban_save_id = trim($ban_save_id);
					$ban_save_id = stripslashes($ban_save_id);
					
					$ban_name = $_POST['ban_name'];
					$ban_name = htmlspecialchars($ban_name);
					$ban_name = mysqli_real_escape_string($dbh, $ban_name);
					$ban_name = stripslashes($ban_name);
					
					$ban_sid = $_POST['ban_sid'];
					$ban_sid = htmlspecialchars($ban_sid);
					$ban_sid = mysqli_real_escape_string($dbh, $ban_sid);
					$ban_sid = stripslashes($ban_sid);
					
					$ban_time = $_POST['ban_time'];
					$ban_time = htmlspecialchars($ban_time);
					$ban_time = mysqli_real_escape_string($dbh, $ban_time);
					$ban_time = stripslashes($ban_time);
					
					$ban_length = $_POST['ban_length'];
					$ban_length = htmlspecialchars($ban_length);
					$ban_length = mysqli_real_escape_string($dbh, $ban_length);
					$ban_length = stripslashes($ban_length);
					
					$ban_admin = $_POST['ban_admin'];
					$ban_admin = htmlspecialchars($ban_admin);
					$ban_admin = mysqli_real_escape_string($dbh, $ban_admin);
					$ban_admin = stripslashes($ban_admin);
					
					$ban_admin_sid = $_POST['ban_admin_sid'];
					$ban_admin_sid = htmlspecialchars($ban_admin_sid);
					$ban_admin_sid = mysqli_real_escape_string($dbh, $ban_admin_sid);
					$ban_admin_sid = stripslashes($ban_admin_sid);
					
					$ban_reason = $_POST['ban_reason'];
					$ban_reason = htmlspecialchars($ban_reason);
					$ban_reason = mysqli_real_escape_string($dbh, $ban_reason);
					$ban_reason = stripslashes($ban_reason);
					
					$ban_left = $_POST['ban_left'];
					$ban_left = htmlspecialchars($ban_left);
					$ban_left = mysqli_real_escape_string($dbh, $ban_left);
					$ban_left = stripslashes($ban_left);
		
					mysqli_query($dbh, "UPDATE `CTBan_Log` SET `timestamp`='$ban_time',`perp_steamid`='$ban_sid',`perp_name`='$ban_name',`admin_steamid`='$ban_admin_sid',`admin_name`='$ban_admin',`bantime`='$ban_length',`timeleft`='$ban_left',`reason`='$ban_reason' WHERE `ban_id`='$ban_save_id'");
					unset($_POST['btn_save']);
					print '<div id="add_ban" class="modal" style="display:block;">
							<form class="modal-content-admin animate" action="" method="post">
							<div class="imgcontainer">
								<span onClick="document.location=' . "'" . $_SERVER['PHP_SELF'] . "'" . '" class="close" title="Close Modal">&times;</span>
							</div>

							<div class="container2">
								<h1 style="text-align:center;margin-bottom:35px;">Bans</h1>
								<center><b><span style="padding:10px;color:#33cc33;">Saved</span></b></center>
							</div>

							<div class="container2" style="background-color:#f1f1f1">
								<button type="button" onclick="document.location=' . "'" . $_SERVER['PHP_SELF'] . "'" . '" class="cancelbtn">Cancel</button>
							</div>
							</form>
							</div>';
				}
				
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

<button onclick=smoothscroll() id="scrollUp" title="Up"><i class="fa fa-arrow-circle-o-up" style="font-size:20px"></i></button>

<footer class='footer'><span style="float:left"><a id="social" href="#" class="fa fa-instagram" style="font-size:16px"></a> <a id="social" href="#" class="fa fa-facebook-square" style="font-size:16px"></a> <a id="social" href="#" class="fa fa-twitter-square" style="font-size:16px"></a> <a id="social" href="#"  class="fa fa-linkedin-square" style="font-size:16px"></a></span>&#169; Copyrights 2017-2018, code by <a class='dream' href='https://www.overgame.eu'>DreaM</a>, All rights reserved.<!--<span style="float:right"><a id="page_up" onClick=smoothscroll() class="fa fa-arrow-circle-o-up" style="font-size:16px"></a></span>--></footer>

</div>
</div>
<script>

// Page scroll 

function myScroll() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

<?php 
if (STICKY_HEADER == true) {
	
	print '
	//NavBar
	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function mySMenu() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky");
		} else {
			navbar.classList.remove("sticky");
		}
	}';
}
?>

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

// Get the modal
var modal = document.getElementsById('id01','add_admin','add_ban');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// ALERT
var close = document.getElementsByClassName("alertclose");
var ii;

for (ii = 0; ii < close.length; ii++) {
    close[ii].onclick = function(){

        var div = this.parentElement;

        div.style.opacity = "0";

        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}

</script>
</body>
</html>	