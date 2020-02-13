<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SQL Example</title>
</head>

<body>

<h3>Users</h3>
<table border='1' cellpadding='5' cellspacing='0'>
<?

	$link = mysqli_connect("localhost", "jselliot_cs3000", "R1Vxa.Wk8!JS", "jselliot_csci3000");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$query = "SELECT Username,FirstName,LastName FROM users";

	if ($result = mysqli_query($link, $query)) {
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td></tr>";
			
		}
		
	}
?>
</table>

<h3>Add User</h3>
<form action="adduser.php" method="POST">
	<label>Username</label><input type="text" name="Username"/><br>
	<label>Password</label><input type="password" name="Password"/><br>
	<label>First Name</label><input type="text" name="FirstName"/><br>
	<label>Last Name</label><input type="text" name="LastName"/><br><br>
	<input type="submit" value="Add User"/>
</form>
	
</body>
</html>
