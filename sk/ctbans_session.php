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

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS);

$db = mysqli_select_db($connection , DB_NAME);
session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($connection, "SELECT * FROM " . DB_PREFIX . "CTBan_Login WHERE `username`='$user_check'");
$user = mysqli_fetch_array($ses_sql);
$login_session =$user['username'];
if(!isset($login_session)){
mysqli_close($connection);
header('Location: ctbans.php');
}
?>