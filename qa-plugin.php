<?php

/*

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

/*
	Plugin Name: Google Analytics
	Plugin URI: 
	Plugin Description: Inserts Analytics code in the <head> and can skip for admin
	Plugin Version: 1.0
	Plugin Date: 2011-03-17
	Plugin Author: Ivan
	Plugin Author URI: http://patuvame.net
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.4
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_layer('google-analytics-layer.php', 'Google Analytics');
	qa_register_plugin_module('module', 'google-analytics-admin-form.php', 'google_analytics_admin_form', 'Google Analytics');
	

/*
	Omit PHP closing tag to help avoid accidental output
*/