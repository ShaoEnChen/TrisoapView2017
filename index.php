<?php

include_once('header.html');
include_once('nav.html');
if(!isset($_GET['route'])) {	// index
	include_once('index_header.html');
	include_once('content/index.html');
}
else {
	include_once('jumbotron.html');
	if($_GET['route'] === 'product') {
		include_once('content/soap.html');
	}
	else {
		include_once('content/' . $_GET['route'] . '.html');
	}
}

include_once('footer.html');

// JQuery UI
if($_GET['route'] === 'faq' || $_GET['route'] === 'partner' || $_GET['route'] === 'single_product') {
	echo '<link href="resource/js/jquery-ui-accordion/jquery-ui.min.css" rel="stylesheet">';
	echo '<script src="resource/js/jquery-ui-accordion/jquery-ui.min.js" defer></script>';
}
// Google Map API
if($_GET['route'] === 'contact') {
	echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqLzZouUqN1dWEVR9_75YO6bXL5OuhcRs"></script>';
	echo '<script src="resource/js/contact-map.js" defer></script>';
}

include_once('footer_finish.html');
