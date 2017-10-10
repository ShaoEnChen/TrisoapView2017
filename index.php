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
}
include_once('footer.html');