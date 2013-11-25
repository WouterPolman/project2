<?php
error_reporting(E_ALL);
/*
	Created by: Wouter Polman
	Klas:		MD2A
	Date:		22-11-2013
	Project:	Project2 - KlaagIets
	File:		Connecting To Database and configuration
*/
	$db_host = "localhost"; //Setting up the connection host
	$db_username = "woutepl78_proj"; //Username of the DataBase
	$db_password = "project123"; //Database password
	$db_name = "woutepl78_proj"; //Database name
	$con = mysqli_connect($db_host,$db_username,$db_password,$db_name);

	//database connection
	if(!$con){
		echo "Could not connect to database".mysqli_connect_error();
		exit();
	}elseif ($con) {
		session_start();
	}else{
		echo "An unknown error appeared".mysqli_connect_error();
		exit();
	}
?>
