<?php
session_start();
$_SESSION["logged"] = 1;
$_SESSION["valid"] = 0;

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

	$sql = "SELECT code FROM players where code==\"$input\"";
	$result = $conn->query($sql);


	
	
		$row = $result->fetch_assoc();
		if($input1=='1')
 		{	$cookie_name = "pageno";
			$cookie_value = "1";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			header( "location: all.php" );
		}


	 
	    else 
	    {
	        header( "location: home.php" );       
	        $_SESSION["valid"] = 0;
	        $_SESSION["init"] = 1;
	    }
	    
	$conn->close();
?>
