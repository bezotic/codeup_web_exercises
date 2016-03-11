<?php

// returns true or false based on whether the key is available
function inputHas($key) {
	if(isset($_REQUEST[$key])) {
		return true;
	} else {
		return false;
	}
}


function inputGet($key) {
	if (inputHas($key)) {
		return $_REQUEST[$key];
	} else {
		return null;
	}


}

//$inputGet = inputHas($key)? $_REQUEST[$key]: null;

// sanitizes user input.
function escape($input) {
	return htmlspecialchars(strip_tags($input));
}

