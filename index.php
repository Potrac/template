<?php

define('ROOT',dirname(__FILE__).'/'); //The constant (the absolut way) to access to all the files in the site

require_once 'includes/bdd.php'; //The BDD connection, so we can use it everywhere we want in the system, just by $db->query() ;

function Load ($classe){require 'class/'.$classe .'.class.php'; }spl_autoload_register ('Load');

$page = strtolower($_GET['p']); //The page variables

// FOR WINDOWS :
/*if(!isset($_GET['p']) OR empty($_GET['p'])){
	$page = $_GET['p'] = 'index';
}

$page = $_GET['p'];
*/

// Check the page and redirect if no file exists
if(!isset($page) OR empty($page)){
	$page = 'index';
}
if(!file_exists('pages/'.$page.'.php') OR !preg_match('/^[a-z]+$/i',$page)){
	$page = '404';
}

//Get the content with the $content variable
ob_start();
	include 'pages/'.$page.'.php';
	$content = ob_get_contents();
ob_end_clean();

require 'template.php'; //The template of the system

$db->CloseCursor(); //Just close the database object

//testing git
?>