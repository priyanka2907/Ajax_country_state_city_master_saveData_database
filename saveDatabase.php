<?php
// today we seen how to save country state city data into database
// we required one database table for save selection
// now save data include database connection file here

//Include database configuration file
include('include/db_connect.php');

// GET ALL DATA FIRST using post

$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
// write query for insert
// date is dafult current timestamp
$query="INSERT INTO  `country_state_city_save`(`id`, `country`, `state`, `city`) 
VALUES (0,".$country.",".$state.",".$city.")";// here we pass all data to query
// now execute query

$query_execute=mysqli_query($mysqli,$query);
// here mysqli_query required two parameter one connection variable & query
// every time pass first variable as connection and second is query

if($query_execute)
{
	
	// now if success redirect to main page
	
	header("location:country.php?q=success");
	
}else
	{
		echo mysqli_error($mysqli);
			header("location:country.php?e=error");
	}



?>