<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Raleway" rel="stylesheet">


		<style>

			@font-face
			{	font-family: "I AM SHERLOCKED";
                src: url("//db.onlinewebfonts.com/t/574963de8c4a0b1bccf4a932064058ad.eot");
                src: url("//db.onlinewebfonts.com/t/574963de8c4a0b1bccf4a932064058ad.eot?#iefix") format("embedded-opentype"),
                url("//db.onlinewebfonts.com/t/574963de8c4a0b1bccf4a932064058ad.woff2") format("woff2"),
                url("//db.onlinewebfonts.com/t/574963de8c4a0b1bccf4a932064058ad.woff") format("woff"),
                url("//db.onlinewebfonts.com/t/574963de8c4a0b1bccf4a932064058ad.ttf") format("truetype"),
                url("//db.onlinewebfonts.com/t/574963de8c4a0b1bccf4a932064058ad.svg#I AM SHERLOCKED") format("svg");
            }

            body, html
			{
				margin: 0;
				scroll-behavior: smooth;
				color:#fff;
				font-family: 'Raleway';
			}
			* { box-sizing: border-box; }

			

			header { font-family:"I AM SHERLOCKED"; }

			header h1 { margin: 0; }

			.tabcontent { padding: 5%; }

			.bg
			{
				background-image: url("bg.jpg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}

			.row1::after
			{
				content: "";
				clear: both;
				display: table;
			}

			.col1
			{
				float: left;
				width: 12.5%;
				padding :2%;
			}

			.col2
			{
				float: left;
				width:55%;
				padding: 1%;
			}

            .col23
			{
				float: left;
				width:75%;
				padding: 1%;
			}

			.col3
			{
				float:left;
				width:25%;
				padding:1%;
			}

			.bg1
			{
				background-image: url("parch.jpg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: 80vw 100%;

				color:#333;
				margin: 2%;
			}

			a
			{
				text-decoration: none;
				display: inline-block;
				padding: 8px 16px;
			}

			a:hover
			{
				background-color: #ddd;
				color: black;
			}

			.previous
			{
				background-color: #fff;
				color: black;

			}

			.round
			{
				border-radius: 50%;

			}

			#about
			{ 	/*width:100%;*/
				font-family:"Cormorant Garamond";
				font-size:4vw;
				font-weight:800;
				text-align:right;
			}

		</style>
	</head>

	<body class="bg">
		<header>
			<h1 align = "center" style="padding-top:5vw; padding-bottom:5vw;">221 B BAKER STREET</h1>
		</header>


	<div id="Character Profiles" class="tabcontent">
	    <a href = "all.php" class = "previous round" padding-right:30vw>&#8249;</a>
	    <div style = "float: right;"><a id="link" href="about.php" style="color: #fff; text-shadow:1px 1px 1px #333; text-decoration:none; font-size:4vw; font-family:'Cormorant Garamond';"> ABOUT </a></div>
	    
		<?php
        
		$servername = "localhost";
		$username = "u883617849_user";
		$password = "sherlock";
		$dbname = "u883617849_at";

			$conn = mysqli_connect($servername, $username, $password, $dbname);
			mysqli_select_db($conn, "at");
			if (!$conn)
			{
				die('connection failed');
			}

			extract($_POST);

			$myname = $_POST["pid"];

			$query = "Select * from people where (id = ". $myname .")";

			$res = mysqli_query($conn, $query);
			$rows = mysqli_fetch_assoc($res);

			echo '<div class = "bg1" >
						<div class = "row1">
							<div class="col1">
							
							</div>
							<div class="col2">
								<p><b>Name : '. $rows["name"] . '</b></p>
								<p><b>DOB : ' . $rows["dob"]. '</b></p>
							</div>
								
							<div class="col3">
								<img  src="'. $rows['imgsrc']. '" style="height: 100%; width: 100%; object-fit: contain;" alt="person">
							</div>
						</div>';
								
						echo "<div class = 'row1'><div class = 'col1'></div><div class = 'col23'>";
							    echo "<p><b>Height : ". $rows['height'] . "</b></p>";
								echo "<p><b>Blood Group : ". $rows['bloodgroup'] . "</b></p>";
								echo "<p><b>Foot size : ". $rows['footsize'] . "</b></p>";
								echo "<p><b>Occupation : ". $rows['job'] . "</b></p>";
								echo "<p><b>National Insurance Number : ". $rows['SSN'] . "</b></p>";
								echo "<p><b>Address : ". $rows['place'] . "</b></p>";
								echo "<p><b>Criminal Record : ". $rows['Criminal_Record'] . "</b></p>";
								echo '<p><b>Early Life : '. $rows["early_life"] . '</b></p>';
								echo '<p><b>Present Life : '. $rows["present"] . '</b></p>
							</div>
						</div>
						
				</div>';
		?>
	</div>

</body>
</html>
