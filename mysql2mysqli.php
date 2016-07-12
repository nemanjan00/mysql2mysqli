<?php
$_connection = NULL;

function mysql_connect($server, $user, $password){
	global $_connection;

	$_connection = mysqli_connect($server, $user, $password);
}

function mysql_select_db($db){
	global $_connection;

	return mysqli_select_db($_connection, $db);
}

function mysql_query($query){
	global $_connection;

	return mysqli_query($_connection, $query);
}

function mysql_fetch_array($result){
	return mysqli_fetch_array($result);
}

function mysql_fetch_row($result){
	return mysqli_fetch_row($result);
}

function mysql_num_rows($result){
	return mysqli_num_rows($result);
}

function mysql_set_charset($charset){
	global $_connection;

	return mysqli_set_charset($_connection, $charset);
}

function mysql_real_escape_string($string){
	global $_connection;

	return mysqli_real_escape_string($_connection, $string);
}

