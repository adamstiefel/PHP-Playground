<?php 
require_once "dbconnect.php";
if(isset($_POST["submit"])){
	$email = $_POST["email"];
	$password = $_POST["password"];

	$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	
	echo $query;
	echo "<h2></h2>";
	try{
		$stmt = $conn->query($query);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		print_r($row);

		if($row === false){
			echo "<p>Login incorrect.</p>";
		} else{
			echo "<p>Login success.</p>";
		}
	}
	catch(PDOException $e)
	{
		echo $query . "<br>" . $e->getMessage();
	}
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h4>Please Login</h4>
    <form action="" method="post">
        <p>Email:<input type="text" name="email" autocomplete="off"></p>
        <p>Password:<input type="text" name="password" autocomplete="off"></p>
        <p><input type="submit" name="submit" value="Login" /></p>
    </form>
</body>

</html>