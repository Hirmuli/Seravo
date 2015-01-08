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
  
  /*
  if(user_is_logged_in())
  {
       // collect data and set action
        $data = array();
        $data['action'] = 'wp_plugin_login_user';
  }
  */
  
 }
 
?>