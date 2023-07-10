<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Home</title>
</head>

<body>
	<h2>Home</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>tailNumber</strong></td>
			<td><strong>flightID</strong></td>
			<td><strong>takeoff</strong></td>
			<td><strong>landing</strong></td>
			<td><strong>Duration</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['tailNumber']."</td>";
			echo "<td>".$res['flightID']."</td>";
			echo "<td>".$res['takeoff']."</td>";	
			echo "<td>".$res['landing']."</td>";
			echo "<td>".$res['Duration']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
	<br><br><br>
	<p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
	
</body>
</html>