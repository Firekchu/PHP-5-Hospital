<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$gender = $db->escape_string($_POST["gender"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$client = $db->escape_string($_POST["client"]);
		
		// Prepare query and execute
		$query = "insert into patient (name, gender, species, status, client) values ('$name','$gender','$species','$status','$client')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>