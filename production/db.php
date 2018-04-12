<?php
function getThis(){
	$th = '';
	return $th;
}
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_DATABASE', 'umoticdb');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,getThis(),DB_DATABASE);



?>
