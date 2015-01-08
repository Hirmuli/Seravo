<?php
/**
 * Plugin Name: Toni´s awesome login saver (alternative)
 * Version: 1.0
 * Description: Saves user name, time of login and success/fail of long2ip
 * Author: Toni Manninen
 * Author URI: http://www.seravo.fi
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
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 // Include and configure log4php
include('../apache-log4php-2.3.0\src\main\php/Logger.php'); //inset the path where you unpacked log4php

Logger::configure('config.xml'); // Tell log4php to configuration file

//Fetch a logger, it will inherit settins from the root logger
$log = Logger::getLogger('myLogger');


//Creates file and saves attempted username, time of attempt and if the login was success or fail.
$log->info($data['username'] + $data['time'] + $data['success']);

 function basicPluginMenu() {
	$appName = 'Login saver';
	$appID = 'login-saver';
	add_menu_page ($appName, $appName, 'administrator',$appID,'-top-level', 'pluginAdminScreen');
 }
 
 function pluginAdminScreen()
 {
  // Will be changed to fit the plugin functionality later...
  echo "<h1>The Basic Plugin Adminarea</h1>
  echo "<p>Here is all the plugin GUI goodness</p>;
 
 

  //Function saves information
function save_information() { //hook 
    $data = array(); //Create array where information is saved
	$data['username'] = $user; //add username to array
	$data['time'] = time(); //add time to array
	if ( is_user_logged_in() ) // check if login is success or fail
	{
	$data['success'] = 'success'; //if login success add "success" to array
	}
	else {($data['success'] = 'failure'; }//if login fails add "failure" to array
	}
}

add_action('wp_login', 'save_information'); //hook




?>