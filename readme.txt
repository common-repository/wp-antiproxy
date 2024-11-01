=== WP-antiProxy ===

Contributors: RS Publishing
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EA4DM82ZJC3YG
Tags: anti-proxy, proxy, ip, ip address, load balancer, server, http
Requires at least: 2.7
Tested up to: 3.4.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


This plugin will fetch and auto-correct the client's IP address in the event that he is hidden behind a proxy or load balancer.


== Description ==

This plugin will fetch and auto-correct the users IP address in the event that he is hidden behind a proxy or load balancer. 
Unlike other similar plugins, WP-antiProxy uses and looks at both the HTTP headers as well as ports. 

The users IP will be set to the first header that matches a simple regular expression of an IP which is ideal to unhide those sneaky visitors.


__WP antiProxy Checks The Following__


The Headers

CLIENT_IP, HTTP_CLIENT_IP, VIA, HTTP_VIA, FORWARDED_FOR_IP, HTTP_FORWARDED_FOR_IP, FORWARDED_FOR, HTTP_FORWARDED_FOR, FORWARDED, HTTP_FORWARDED
X_FORWARDED_FOR, HTTP_X_FORWARDED_FOR, X_FORWARDED, HTTP_X_FORWARDED, HTTP_PROXY_CONNECTION


The Ports

8080,80,81,1080,6588,8000,3128,553,554,4480


== Installation ==

1. Download the wp-antiproxy.zip file
2. Upload and extract the contents of wp-antiproxy.zip to your wp-content/plugins/folder
3. Activate the antiProxy plugin in your WP-admin
4. Voila

== Frequently Asked Questions ==

None

== Feedback, Help, and Suggestions ==

Just post a mail to: rcstoltz@gmail.com with email Subject : WP antiProxy


== Upgrade Notice ==

None


== Screenshots ==

1. antiProxy installed
2. proxy error


== Changelog ==

= 1.0 =

* 10/13/2012: Updated readme.txt file


= Version 1.0 =

First Version

== Thumbs Up ==

Like our WP antiProxy plugin? Don't forget to give us a rating.