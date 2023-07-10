<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="home.php">Home</a>
	</p>
	
	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>tailNumber</td>
				<td><input type="text" name="tailNumber"></td>
			</tr>
			<tr> 
				<td>flightID</td>
				<td><input type="text" name="flightID"></td>
			</tr>
			<tr> 
				<td>takeoff</td>
				<td><input type="text" name="takeoff"></td>
			</tr>
			<tr> 
				<td>landing</td>
				<td><input type="text" name="landing"></td>
			</tr>
			<tr> 
				<td>Duration</td>
				<td><input type="text" name="Duration"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

