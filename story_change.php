<?php
session_start();

if (! isset($_SESSION["stage"])){
    $_SESSION["stage"] = "init";
}

$servername = "localhost";
$username = "u883617849_user";
$password = "sherlock";
$dbname = "u883617849_at";
	
	$input1= $_POST["input1"];
	$input2= $_POST["input2"];
	$input3= $_POST["input3"];
	$input4= $_POST["input4"];
	$input= $input1.$input2.$input3.$input4;

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT c_no,F FROM clues where F=\"$input\"";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

		$cookie_name = "pageno";
		$cookie_value = $row["c_no"];
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		
		$_SESSION["inits"] = 0;
	    $_SESSION["valids"] = 1;
	        
		header( "location: all.php" );

}
	else
	{
	        $_SESSION["inits"] = 1;
	        $_SESSION["valids"] = 0;
		    header("location: all.php");
	}
	$conn->close();
?>
