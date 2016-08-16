<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Wiredecho's CodeIgniter Template!</h1>

	<div id="body">
		<p>The following has been modded from original CI Files:</p>

		<p>htaccess</p>
		<code>IfModule mod_rewrite.c
		RewriteEngine On
		RewriteBase /

		#Removes access to the system folder by users.
		#Additionally this will allow you to create a System.php controller,
		#previously this would not have been possible.
		#'system' can be replaced if you have renamed your system folder.
		RewriteCond %{REQUEST_URI} ^system.*
		RewriteRule ^(.*)$ /index.php?/$1 [L]

		#When your application folder isn't in the system folder
		#This snippet prevents user access to the application folder
		#Submitted by: Fabdrol
		#Rename 'application' to your applications folder name.
		RewriteCond %{REQUEST_URI} ^application.*
		RewriteRule ^(.*)$ /index.php?/$1 [L]

		#Checks to see if the user is attempting to access a valid file,
		#such as an image or css document, if this isn't true it sends the
		#request to index.php
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule ^(.*)$ index.php?/$1 [L]
		/IfModule

		IfModule !mod_rewrite.c
		# If we don't have mod_rewrite installed, all 404's
		# can be sent to index.php, and everything works as normal.
		# Submitted by: ElliotHaughin

		ErrorDocument 404 /index.php
		IfModule </code>

		<p>config/autoload:</p>
		<code>$autoload['libraries'] = array('database', 'session');
		$autoload['helper'] = array('form','url');</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>