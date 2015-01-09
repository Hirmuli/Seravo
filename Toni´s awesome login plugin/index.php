<?php
/**
 * Plugin Name:Login logger
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
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
add_action ('wp_authenticate' , 'check_custom_authentication');    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 
 defined('ABSPATH') or die("No script kiddies please!"); //Blocks direct access to plugins PHP files.
 
  date_default_timezone_set('UTC'); //set the default timezone to use. Available PHP 5.1
  $data = array(username,time,login); // create array
  
  
  //runs the plugin when user tries to login
  add_action ('wp_authenticate', 'get_login_information');
  

function get_login_information( )
	{
	//save attempted username to variable
	$user = get_user_by('login', string username);
	data['username'] = $user; //ad variable to data array.
	
	data['time'] = date("d/m/Y")+ " " + date("h:i:sa");
	
	// check if "login was successful or failed
 	if ( 0 == $current_user -> ID ) {
	//Action on failed login
	add_action ( 'wp_login_failed', data['login']($this, 'login_failed') );
		}
	else {
	//Action on successful login
	add_action( 'wp_login', data['login']($this, 'login_success') );
	}
	
	save_to_log(); // run save function to save this information to log file
}


//save information to login.log file
function save_to_log()
{
	$logfile = fopen("login.log", "w") or die("Unable to open file"); // create and open file
	fwrite($logfile, $data['username'] + "," + $data['time'] + "," + $data['login'] + "\n");
	fclose($logfile); //close file
}

?>