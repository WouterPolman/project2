<?php
/*
	Created by: Wouter Polman
	Klas:		MD2A
	Date:		22-11-2013
	Project:	Project2 - KlaagIets
	File:		Inserting tweets into database
*/
	include('includes/config.php');
	//information of the tweets
	//Variabels
	//auto_increment id
	$id	= "";
	//the tweeter that tweeted the tweet
	$tweeter = "";
	//The text of the tweet
	$text = "";
	//date tweet is posted
	$date = "";
	//selecting the last id for the insert table
	$insert_id = "";
	//Query to insert the tweets in the database
	$query = mysqli_query($con, "INSERT INTO tweets(`inhoud`, `tweeter`, `date`, `insert_id`)
		VALUES (
			'" . mysqli_real_escape_string($con, $tweeter) .  "',			
			'" . mysqli_real_escape_string($con, $text) .  "',
			NOW(),
			'" . $scriptmoethier .  "'
			)
			  ");

	//if error while inserting
	if(!$query){
		echo "Could not insert information to the database".mysqli_error();
		exit();
	//if succefull inserted
	}elseif ($query) {
		echo "Succesfull inserted tweets to database";
		$succes = "1";
	//if something weird went wrong
	}else{
		echo "Somenthing went wrong".mysqli_connect_error();
	}
die();
	//If everything is inserted, Insert information about the tweet insert to the database.
	//variabels
	$tweet_count_query = mysqli_query("SELECT COUNT(insert_id) FROM tweets WHERE insert_id=".$insert_id);
	$tweet_count = mysqli_fetch_assoc($tweet_count_query);
	if($succes == "1"){
		//query for inserting
		$query = mysqli_query("INSERT INTO inserts (`date`,`tweet_count`) 
				 VALUES (now(),
				 	     ".$tweet_count.
				 	    ")
				 ");
		//Inserting the values and checking if it succeed
		if($query){
			echo $tweet_count." tweets are succesfull inserted";
			exit();
		}else{
			echo "Something went wrong while inserting information to the inserts table".mysqli_connect_error();
			exit();
		}
	}
?>