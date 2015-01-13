<?php
/**
* Plugin Name:Login logger2015
* Version: 1.0
* Description: Saves username, time of login and success/failure of login attempt
* Author: Toni Manninen
* Plugin URI: http://www.seravo.fi
* Licence:
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/
defined('ABSPATH') or die("No script kiddies please!"); //Blocks direct access to plugins PHP files.

date_default_timezone_set('UTC'); //set the default timezone to use. Available PHP 5.1

 
//runs the plugin when user tries to login
add_action ('wp_signon', 'get_login_information');

function get_login_information()
{
// check if "login was successful or failed
if ( 0 == $current_user -> ID ) {
		//Action on failed login
		add_action ( 'wp_login_failed', $login($this, 'login_failed') );
		//save time to variable
		$date_time = date("D M j G:i:s T Y");
		//ad userinformation to variable
		$user_info = $username . "," . $date_time . "," . $login;
		//save information to log
		save_to_log($user_info);
		}
else {
		//Action on successful login
		add_action( 'wp_login', $login($this, 'login_success') );
		//save time to variable
		$date_time = date("D M j G:i:s T Y");
		//Ad userinformation to variable
		$user_info = $username . "," . $date_time . "," . $login;
		save_to_log($user_info);
		}

}


function save_to_log($user_info){
$fp = fopen('login.log', a);
fputs($fp, "$user_info\n"); // write the data in the opened file
fclose($fp); // close the filer/wordpress/account/".TEMPLATEPATH. $file, $user_info, FILE_APPEND);
 }
 
?>
