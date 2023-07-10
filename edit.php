<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$tailNumber = $resultData['tailNumber'];
$flightID = $resultData['flightID'];
$takeoff = $resultData['takeoff'];
$landing = $resultData['landing'];
$Duration = $resultData['Duration'];
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="home.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>tailNumber</td>
				<td><input type="text" name="tailNumber" value="<?php echo $tailNumber; ?>"></td>
			</tr>
			<tr> 
				<td>flightID</td>
				<td><input type="text" name="flightID" value="<?php echo $flightID; ?>"></td>
			</tr>
			<tr> 
				<td>takeoff</td>
				<td><input type="text" name="takeoff" value="<?php echo $takeoff; ?>"></td>
			</tr>
			<tr> 
				<td>landing</td>
				<td><input type="text" name="landing" value="<?php echo $landing; ?>"></td>
			</tr>
			<tr> 
				<td>Duration</td>
				<td><input type="text" name="Duration" value="<?php echo $Duration; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
