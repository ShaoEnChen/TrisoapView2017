<?php

include_once('header.html');
include_once('nav.html');
if(!isset($_GET['route']))
	include_once('jumbotron.html');
include_once('content/index.html');
include_once('footer.html');