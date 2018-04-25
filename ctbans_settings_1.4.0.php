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
*
*											-->		SETTINGS	<--
*
**/

///////////////////////////////////////////////////////////////
//		DATABASE SETTING

$server="___HOST___";
$username="___USER___";
$password="___PASS___";
$database="___DB___";
$table_prefix="";

///////////////////////////////////////////////////////////////
 
//		RESULTS SETTING
$results_per_page="15";


///////////////////////////////////////////////////////////////

//		HEADER AND SUBHEADER SETTINGS

//	Enable Sticky Header
//	true = enable, false = disable
$sticky_header = true;


//	Page Name
$page_name = "JailBreak | CTBanlist";


//	Header Name
$header = "JailBreak | CT Bans";


//	Header Color
//	DEFAULT --> "#f1f1f1"
$header_background_color = "#f1f1f1";


//	Header text color 
//	DEFAULT --> "black" / "#000"
$header_text1_color = "black";


//	Enable or Disable SubHeader
//	true = enable, false = disable
$enable_subheader = true;


//	SubHeader Text
$subHeader = "Ctbanlist for JailBreak.";


//	SubHeader Color
//	DEFAULT --> "black" / "#000"
$header_text2_color = "black";


///////////////////////////////////////////////////////////////

//		MENU SETTINGS


//	Home size
//	DEFAULT top --> 16px, side --> 16px;
$menu_size_top = "16px";
$menu_size_side = "16px";


//	Home button name
$menu_home_button_name = "Home";


//	Home button color
//	DEFAULT --> "#3473c1"
$menu_home_button_color = "#3473c1";


//		MENU BUTTONS SETTINGS


//		RIGHT SIDE

//	BTN 1 (default)
$btn1_name = "WEB";
$btn1_link = "____LINK____";


//	BTN 2
//	Enable or Disable BTN 2
//	true = enable, false = disable
$btn2_enable = true;
$btn2_name = "BanList";
$btn2_link = "____LINK____";


//	BTN 3
//	Enable or Disable BTN 3
//	true = enable, false = disable
$btn3_enable = false;
$btn3_name = "BUTTON";
$btn3_link = "____LINK____";


//		LEFT SIDE

//	BTN 4 (default)
$btn4_name = "Forum";
$btn4_link = "____LINK____";


//	BTN 5
//	Enable or Disable BTN 5
//	true = enable, false = disable
$btn5_enable = true;
$btn5_name = "HLstatsX";
$btn5_link = "____LINK____";


//	BTN 6
//	Enable or Disable BTN 6
//	true = enable, false = disable
$btn6_enable = false;
$btn6_name = "BUTTON";
$btn6_link = "____LINK____";


///////////////////////////////////////////////////////////////

//		SIDEBAR SETTINGS


//	Enable or Disable Sidebar
//	true = enable, false = disable
$sidebar_enable = true;

//	SID 1
$sid1_name = "EVIP";
$sid1_link = "____LINK____";
//	DEFAULT --> "#4CAF50"
$sid1_color = "#4CAF50";
//	DEFAULT --> "grade"
$sid1_icon = "grade";


//	SID 2
$sid2_name = "Obchod";
$sid2_link = "____LINK____";
//	DEFAULT --> "#2196F3"
$sid2_color = "#2196F3";
//	DEFAULT --> "shopping_cart"
$sid2_icon = "shopping_cart";

//	SID 3
$sid3_name = "Kontakt";
$sid3_link = "____LINK____";
//	DEFAULT --> "#f44336"
$sid3_color = "#f44336";
//	DEFAULT --> "contact_mail"
$sid3_icon = "contact_mail";


///////////////////////////////////////////////////////////////

//		SEARCH SETTINGS


//	Enable or Disable Search
//	true = enable, false = disable
$search_enable = true;


///////////////////////////////////////////////////////////////

//		OTHER SETTINGS


//	Indicate scroll on the top of the page
//	true = enable, false = disable
$scroll_indicator = true;


//	Page background color
//	DEFAULT --> "#fcfcfc"
$page_background_color = "#fcfcfc";


//		END

///////////////////////////////////////////////////////////////


define("DB_HOST", $server);
define("DB_USER", $username);
define("DB_PASS", $password);
define("DB_NAME", $database);
define("DB_PREFIX", $table_prefix);
define("RESULTS", $results_per_page);

define("PAGE_NAME", $page_name);
define("PAGE_HEADER", $header);
define("SUB_HEADER", $subHeader);

define("STICKY_HEADER", $sticky_header);

define("SIDEBAR_ENABLE", $sidebar_enable);

define("SID_1_NAME", $sid1_name);
define("SID_1_LINK", $sid1_link);
define("SID_1_COLOR", $sid1_color);
define("SID_1_ICON", $sid1_icon);

define("SID_2_NAME", $sid2_name);
define("SID_2_LINK", $sid2_link);
define("SID_2_COLOR", $sid2_color);
define("SID_2_ICON", $sid2_icon);

define("SID_3_NAME", $sid3_name);
define("SID_3_LINK", $sid3_link);
define("SID_3_COLOR", $sid3_color);
define("SID_3_ICON", $sid3_icon);

define("MENU_H_NAME", $menu_home_button_name);
define("HB_COLOR", $menu_home_button_color);

define("M_SIZE_TOP", $menu_size_top);
define("M_SIZE_SIDE", $menu_size_side);

define("SCROLL_INDICATOR", $scroll_indicator);
define("PG_BACK", $page_background_color);
define("HD_BACK", $header_background_color);
define("HD_TEXT_1", $header_text1_color);
define("HD_TEXT_2", $header_text2_color);
define("ENAB_SUB", $enable_subheader);

define("BTN_1_NAME", $btn1_name);
define("BTN_1_LINK", $btn1_link);

define("BTN_2_NAME", $btn2_name);
define("BTN_2_LINK", $btn2_link);
define("BTN_2_ENABLE", $btn2_enable);

define("BTN_3_NAME", $btn3_name);
define("BTN_3_LINK", $btn3_link);
define("BTN_3_ENABLE", $btn3_enable);

define("BTN_4_NAME", $btn4_name);
define("BTN_4_LINK", $btn4_link);

define("BTN_5_NAME", $btn5_name);
define("BTN_5_LINK", $btn5_link);
define("BTN_5_ENABLE", $btn5_enable);

define("BTN_6_NAME", $btn6_name);
define("BTN_6_LINK", $btn6_link);
define("BTN_6_ENABLE", $btn6_enable);

define("SEARCH_ENABLE", $search_enable);

?>