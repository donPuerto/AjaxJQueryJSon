<?php
if(isset($_GET['page'])){

	$page = trim($_GET['page']);
	
	//security settings
	$allowed = array('Home', 'About', 'Contact');

	if (in_array($page, $allowed)) {

		echo file_get_contents("pages/{$page}.html");
	}
}