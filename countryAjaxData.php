<?php
//fetch all country data from database
//Include database configuration file
include('include/db_connect.php');

    $query = $mysqli->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");// select all country from database 

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0)
		
		{
	echo '<option value="">Select Country</option>';// initial message display{  
	//echo '<input type="text" >';// initial message display
        
        while($row = $query->fetch_assoc())
		{
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';// select country id & name from country table
        }
    }
	else
	{
        echo '<option value="">Country Not Available</option>'; //display when no data!
	}

// now in database stored country state city id not name 
// if you want to save name some chanegs here
// always select box option value will save into database by default
// here we given id as value and name as text in select
// initial we save country id in state table 

?>
