<?php

// The database connection, edit it ! (I just added a query to set all things ok whit specials characters)
try
{
	$db = new PDO('mysql:host=localhost;dbname=template', 'root', 'root');
	$db->query("SET NAMES UTF8");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>