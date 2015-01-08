<?php
/**
 * Plugin Name: Toni´s awesome login saver
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
	$data['username'] = 'wp_plugin_login_user'; //add username to array
	$data['time'] = time(); //add time to array
	if ( wp_login == true) // check if login is success or fail
	{
	$data['success'] = 'success'; //if login success add "success" to array
	}
	else ($data['success'] = 'failure'; //if login fails add "failure" to array
}
add_action('wp_login', 'save_information'); //hook action

//create file and save data to file (needs updating)
 function saveToTxt() {
 $my_file = 'session';
 $handle = fopen($my_file, 'w') or die('Cannot open file: '$my_file);
 $data = array();
 fwrite($handle, $array);
 fclose($handle);
	}
 
 
?>