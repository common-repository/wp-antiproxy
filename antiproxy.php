<?php

/*
Plugin Name: WP-antiProxy
Plugin URI: http://wordpress.org/extend/plugins/wp-antiproxy/
Description: This plugin will fetch and auto-correct the client's IP address in the event that he is hidden behind a proxy or load balancer.
Version: 1.0
Author: RS Publishing
License: GPL2
*/

/*
  Copyright 2012  Rynaldo Stoltz  (email : rcstoltz@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

$ip_match = '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/';

$cip_proxies = array(
	'CLIENT_IP',
	'HTTP_CLIENT_IP',
	'VIA',
	'HTTP_VIA',
	'FORWARDED_FOR_IP',
	'HTTP_FORWARDED_FOR_IP',
	'FORWARDED_FOR',
	'HTTP_FORWARDED_FOR',
	'FORWARDED',
	'HTTP_FORWARDED',
	'X_FORWARDED_FOR',
	'HTTP_X_FORWARDED_FOR',
	'X_FORWARDED',
	'HTTP_X_FORWARDED',
	'HTTP_PROXY_CONNECTION',
    );

    foreach($cip_proxies as $x){
        if (isset($_SERVER[$x])) die("Proxy Detected!");
    }

$ports = array(8080,80,81,1080,6588,8000,3128,553,554,4480);
foreach($ports as $port) {
    if (@fsockopen($_SERVER['REMOTE_ADDR'], $port, $errno, $errstr, 1)) {
        die("Proxy Detected!");
    }
}
