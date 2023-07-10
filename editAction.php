<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$tailNumber = mysqli_real_escape_string($mysqli, $_POST['tailNumber']);
	$flightID = mysqli_real_escape_string($mysqli, $_POST['flightID']);
	$takeoff = mysqli_real_escape_string($mysqli, $_POST['takeoff']);	
	$landing = mysqli_real_escape_string($mysqli, $_POST['landing']);
	$Duration = mysqli_real_escape_string($mysqli, $_POST['Duration']);
	
	// Check for empty fields
	if (empty($tailNumber) || empty($flightID) || empty($takeoff) || empty($landing) || empty($Duration)) {
		if (empty($tailNumber)) {
			echo "<font color='red'>tailNumber field is empty.</font><br/>";
		}
		
		if (empty($flightID)) {
			echo "<font color='red'>flightID field is empty.</font><br/>";
		}
		
		if (empty($takeoff)) {
			echo "<font color='red'>takeoff field is empty.</font><br/>";
		}

		if (empty($landing)) {
			echo "<font color='red'>landing field is empty.</font><br/>";
		}

		if (empty($Duration)) {
			echo "<font color='red'>Duration field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE users SET `tailNumber` = '$tailNumber', `flightID` = '$flightID', `takeoff` = '$takeoff', `landing` = '$landing', `Duration` = '$Duration' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='home.php'>View Result</a>";
	}
}
