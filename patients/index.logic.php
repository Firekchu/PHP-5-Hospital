<?php
	
	$db = new mysqli('localhost','root','','hospital');

	if (isset($_GET['sort'])) {
		$sort = $_GET['sort'];
		if ($sort == "name-desc") {
			$query = "SELECT * FROM patient ORDER BY name DESC";
		} elseif ($sort == "name-asc") {
			$query = "SELECT * FROM patient ORDER BY name ASC";
		} elseif ($sort == "gender-desc") {
			$query = "SELECT * FROM patient ORDER BY gender DESC";
		} elseif ($sort == "gender-asc") {
			$query = "SELECT * FROM patient ORDER BY gender ASC";
		} elseif ($sort == "species-desc") {
			$query = "SELECT * FROM patient ORDER BY species DESC";
		} elseif ($sort == "species-asc") {
			$query = "SELECT * FROM patient ORDER BY species ASC";
		} elseif ($sort == "client-desc") {
			$query = "SELECT * FROM patient ORDER BY client DESC";
		} elseif ($sort == "client-asc") {
			$query = "SELECT * FROM patient ORDER BY client ASC";
		}
	} else {
		$query = "SELECT * FROM patient ORDER BY name ASC";
	}
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>