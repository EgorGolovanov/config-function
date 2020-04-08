<?php

function config($optionName, $defaultValue = null) {
	$data = require 'settings.php';
	$parsedOptionName = explode('.', $optionName);
 
	foreach($parsedOptionName as $option) {
		if(array_key_exists($option, $data)) {
			$data = $data[$option];
		} else {
			return ($defaultValue == null) ? "Setting not found!" : $defaultValue;
		}
	}
 
	return $data;
}

echo config("db.user") . "\n";
echo config("site_url") . "\n";
echo config("db.host", "localhost") . "\n";
 

