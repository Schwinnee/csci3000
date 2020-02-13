<?

$link = mysqli_connect("localhost", "jselliot_cs3000", "R1Vxa.Wk8!JS", "jselliot_csci3000");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

if(isset($_POST["Username"]) && isset($_POST["Password"]))
{
	$query = mysqli_prepare($link, "INSERT INTO users (Username,Password,FirstName,LastName) VALUES(?,?,?,?)");
	
	
	
	mysqli_stmt_bind_param($query,"ssss",
						   $_POST["Username"],
						   sha1($_POST["Password"]),
						   $_POST["FirstName"],
						   $_POST["LastName"]);
	
	mysqli_stmt_execute($query);
	
	mysqli_stmt_close($query);
}

header("Location: index.php");

?>