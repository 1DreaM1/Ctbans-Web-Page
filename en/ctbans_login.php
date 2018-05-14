<?php
/**
* CtBans  Copyright (C) 2017-2018 DreaM (support@overgame.eu)
*	
*    This program is free software: you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation, either version 3 of the License, or
*    (at your option) any later version.
*    This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*    You should have received a copy of the GNU General Public License
*    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*
*
**/

require_once("ctbans_settings.php");
session_start();
$error='';
if (isset($_POST['login_btn'])) {
if (empty($_POST['uname']) || empty($_POST['psw'])) {
$error = "<b><span style='color:red;'>Username</span></b> or <b><span style='color:red;'>Password</span></b> is invalid";
}
else
{

$user=$_POST['uname'];
$pass=$_POST['psw'];

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS);

$user = stripslashes($user);
$pass = stripslashes($pass);
$user = mysqli_real_escape_string($connection, $user);
$pass = mysqli_real_escape_string($connection, $pass);

$db = mysqli_select_db($connection, DB_NAME);

$query_r = mysqli_query($connection , "SELECT * FROM " . DB_PREFIX . "CTBan_Login WHERE `password`='$pass' AND `username`='$user'");
$rows = mysqli_num_rows($query_r);
$row_id = mysqli_fetch_array($query_r);
if(isset($_POST["remember"])) {
	setcookie ("member_ct_login",$user,time()+ (10 * 365 * 24 * 60 * 60));
	setcookie ("member_ct_password",$pass,time()+ (10 * 365 * 24 * 60 * 60));
}
if ($rows == 1) {
$_SESSION['login_user']=$user;
$_SESSION['login_id']=$row_id['id'];
header("Location: ctbans.php");
}
else {
$error = "<b><span style='color:red;'>Username</span></b> or <b><span style='color:red;'>Password</span></b> is invalid";
}
mysqli_close($connection);
}
}
?>