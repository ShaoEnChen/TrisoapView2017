<?php

include_once('header.html');
include_once('nav.html');
if(!isset($_GET['route'])) {	// index
	include_once('jumbotron_index.html');
	include_once('content/index.html');
}
else {
	include_once('jumbotron.html');
	include_once('content/' . $_GET['route'] . '.html');
	if($_GET['route'] === 'faq' || $_GET['route'] === 'partner') {
		echo '<link href="resource/js/jquery-ui-accordion/jquery-ui.min.css" rel="stylesheet">';
		echo '<script src="resource/js/jquery-ui-accordion/jquery-ui.min.js" defer></script>';
	}
}
include_once('footer.html');