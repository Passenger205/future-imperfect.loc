<?php

/**
 * Development file, contents features, that needs just for development state
 * @package xtn-framework
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

function debug($dump, $multiple = false)
{
	if ($multiple) {
		foreach ($dump as $var) {
			echo "<pre>";
			var_dump($var);
			echo "<hr>";
			echo "</pre>";
		}
	} else {
		echo "<pre>";
		var_dump($dump);
		echo "</pre>";
	}

	die();
}