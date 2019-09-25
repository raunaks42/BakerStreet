<?php
	session_start();
	
	if (!isset($_SESSION["inits"])){
        $_SESSION["inits"] = 0;
    }
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

			* { box-sizing: border-box; }

            body, html
			{
				margin: 0;
				scroll-behavior: smooth;
				color:#fff;
				font-family: 'Raleway';
			}

			.bg
			{
				background-image: url("bg.jpg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}

			header { font-family:"I AM SHERLOCKED"; }

			header h1 { margin: 0; }

			#about
			{ 	width:100%;
				font-family:"Cormorant Garamond";
				font-size:20px;
				font-weight:800;
				text-align:right;
			}

			.tablink
			{
				color:#fff;
				background-color: #333;
				float:left;
				border: none;
				margin-right:1vw;
				cursor: pointer;
				padding: 0.5vw;
				/*font-size: 30px;*/
				width: 30%;
				border-top-left-radius: 10px;
				border-top-right-radius: 10px;
			}

			.tablink:hover { background-color: #444; }

			.tablink.active
			{
  				background-color: #fff;
					color: #333;
			}

			.tablink { padding: 1% 1%; }

			.tabcontent { padding: 5%; }

			.container
			{
				font-size: 20px;
				font-family:"Cormorant Garamond";
				text-align: justify;
			}
			
			#container1
			{	width:100%;
				text-align: center;
				font-family:"Cormorant Garamond";
				font-size: 50%;
			}

			#container1 .box { margin:1% 2% 1% 2%; }

			#container1 .box .field
			{	width:15vw;
				height: 15vw;
				text-transform: uppercase;
				text-align: center;
                font-size: 5vw;
				font-family:"I AM SHERLOCKED";
				margin-right:25px;
			}

			#container1 .box #field4 { margin-right: 0px; }

			#container1 .box #submit
			{	border-radius:10px;
				font-family:"Raleway";
				font-size: 20px;
				text-shadow:2px 2px 4px #333;
				font-weight:800;
				padding:5px;
				background-color: #fff;
			}

			#container1 .box #submit:hover { border:3px solid #bbb; }

			.link
            {
                
                font-family:"Cormorant Garamond";
				font-size:20px;
				border-style: solid;
                border-width: 0.1vw;
            }

			.container2
			{
				font-size: 20px;
				font-family:"Cormorant Garamond";
				text-align: justify;
			    background-color: #707471;       
				color: white;
				border: 0.1vw solid white;
				padding-top: 2vw;
                padding-right:2vw;
                padding-bottom: 10vw;
                padding-left: 2vw;
			}

			.space
			{
			    padding-bottom:25vh;
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
			
			.name {
			    padding-bottom : 6vw;
			    padding-left : 20vw;
			}
			

		</style>
	</head>

	<body class="bg">
		<header>
			<h1 align = "center" style="padding-top:5vw; padding-bottom:5vw;">221 B BAKER STREET</h1>
		</header>
		<section id="about">
			<a id="link" href="about.php" style="color: #fff; text-shadow:1px 1px 1px #333; text-decoration:none; padding:3vw;"> ABOUT </a>
		</section>

		<button class="tablink" onclick="Page(event,'Story')" id="defaultOpen"><p style="font-size:3vw;">STORY</p></button>
		<button class="tablink" onclick="Page(event,'Map')"><p style="font-size:3vw;">MAP</p></button>
		<button class="tablink" onclick="Page(event,'Character Profiles')"><p style="font-size:3vw;">CHARACTERS</p></button>


		<div id="Story" class="tabcontent">
			<?php
				$c=$_COOKIE["pageno"];
				
				$servername = "localhost";
				$username = "u883617849_user";
				$password = "sherlock";
				$dbname = "u883617849_at";
				
				$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error)
					{
						die("Connection failed: " . $conn->connect_error);
					}

					$sql1 = "SELECT story_content FROM story_text WHERE 1";
					$result1 = $conn->query($sql1);
					$sql = "SELECT id, para  FROM story where id=\"$c\"";
					$result = $conn->query($sql);


					if ($c < 8){
						$_SESSION["stage"] = "init";
					
								
					}
					
					if ( ($c == 14)){
						$_SESSION["stage"] = "killer";
						
									
					}
					
					if (($c == 8)) {
						$_SESSION["stage"] = "therapist";
						
					}
					
					if ($c == 1)
					{	echo '<div class = "container" id = "story">';
						if ($result1->num_rows > 0)
						{
							while($row = $result1->fetch_assoc())
							{
								echo '<p><br>'. $row["story_content"]. '</p>';
							}
						}
						else
						{
							echo "0 results";
						}

						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{
								echo '<p>'. $row["para"] . '</p>';
							}
						}
						else
						{
							echo "0 results";
						}
						echo '</div>';
					
						echo '<div id = "container1">
								<div class = "box">';
								
								if( ($_SESSION["inits"] == 1) && ($_SESSION["valids"]==0))
								{
									echo"<p align='center'><font color='orange'> INVALID</font></p>";
								}
								echo'
									<form action="story_change.php" class="form" method="POST">
										<b> ENTER THE SECRET CODE </b> </br> </br>
										<input type="text" maxlength="1" class="field" id="field1" name="input1" onkeyup="movetoNext(this, \'field2\')"><input type="text" maxlength="1" class="field" id="field2" name="input2" onkeyup="movetoNext(this, \'field3\')" onkeydown="movetoPrev(this,\'field1\',event)"><input type="text" maxlength="1" class="field" id="field3" name="input3" onkeyup="movetoNext(this, \'field4\')" onkeydown="movetoPrev(this,\'field2\',event)"><input type="text" maxlength="1" class="field" id="field4" name="input4" onkeydown="movetoPrev(this,\'field3\',event)">
										</br> </br>
										<input type="submit" id="submit" value="  Proceed  ">
									</form>
								</div>
							</div>';
					}

					if ($c != 1)
					{   if (($c == 8)||($c==14))
						{
						echo'<br><br><br> <p align = "center"><font color="orange"  ><b> NEW CHARACTER ADDED IN PROFILES</b></font><p><br>';
						}
						echo '<br><h3 align = "center" class="link"><b>Click <a href="#story"><font color="white"><u>here</u></font></a> to view the story again</b></h3>';
					
						echo '<div class="container">';
						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{
								echo '<p>'. $row["para"] . '</p>';
							}
						}
						else
						{
							echo "0 results";
						}
						echo '</div>';
						if($c != 14)
						{
							echo '<div id = "container1">
									<div class = "box">';
									
									if( ($_SESSION["inits"] == 1) && ($_SESSION["valids"]==0))
									{
										echo"<p align='center'><font color='orange'> INVALID</font></p>";
									}
									
									
									echo '
										<form action="story_change.php" class="form" method="POST">
											<b> ENTER THE SECRET CODE </b> </br> </br>
											<input type="text" maxlength="1" class="field" id="field1" name="input1" onkeyup="movetoNext(this, \'field2\')">
											<input type="text" maxlength="1" class="field" id="field2" name="input2" onkeyup="movetoNext(this, \'field3\')" onkeydown="movetoPrev(this,\'field1\',event)">
											<input type="text" maxlength="1" class="field" id="field3" name="input3" onkeyup="movetoNext(this, \'field4\')" onkeydown="movetoPrev(this,\'field2\',event)">
											<input type="text" maxlength="1" class="field" id="field4" name="input4" onkeydown="movetoPrev(this,\'field3\',event)">
											</br> </br>
											<input type="submit" id="submit" value="  Proceed  ">
										</form>
									</div>
								</div>';
						}
						if ($result1->num_rows > 0)
						{
							while($row = $result1->fetch_assoc())
							{
								echo '<div class = "container2" id = "story"><i>'. $row["story_content"]. '</i></div>';
							}
						}
						else
						{
							echo "0 results";
						}
					}
					$conn->close();

			?>

		</div>


		<div id="Map" class="tabcontent" >
			<div >
				<br><h4 align = "center">Map of London</h4><br>
				<img src="map2.png" alt="Map Image" width='100%' height='100%'>
			</div>
		</div>


		<div id="Character Profiles" class="tabcontent">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-3 col-xs-12">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="1">
							<input type="image" src="scientist.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 2vh;">
							<div class="name">Dr. Stephen Langer</div>
						</form>
					</div>

					<div class="col-sm-12 col-md-3 col-xs-12">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="2">
							<input type="image" src="Maid.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">Bella Thorne</div>
						</form>
					</div>

					<div class="col-sm-12 col-md-3 col-xs-12">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="3">
							<input type="image" src="cook.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">Dave Jordan</div>
						</form>
					</div>
					
					<?php 
						if ($_SESSION["stage"] == "killer"){
							echo '
							<div class="col-sm-3">
								<form class="form1" action="char.php" method="post">
									<input type="hidden" name="pid" value="5">
									<input type="image" src="killer.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
									<div class="name">Dr Bill Jones</div>
								</form>
							</div>';
						}
					?>

					<div class="col-sm-12 col-md-3 col-xs-12">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="4">
							<input type="image" src="gardener.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">Rami Malik</div>
						</form>
					</div>

				</div>

				<div class="row">
					
					<div class="col-sm-3">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="7">
							<input type="image" src="stuart(son).png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">Stuart Langer</div>
						</form>
					</div>
					
					<?php 
						if ($_SESSION["stage"] == "therapist"||$_SESSION["stage"] == "killer" ){
							echo '
							<div class="col-sm-3">
								<form class="form1" action="char.php" method="post">
								<input type="hidden" name="pid" value="8">
								<input type="image" src="therapist.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">Emma Joseph</div>
						</form>
					</div>';
					
						}
					?>

					<div class="col-sm-3">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="6">
							<input type="image" src="brother.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">William Langer</div>
						</form>
					</div>

					<div class="col-sm-3">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="9">
							<input type="image" src="wife.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">Dr. Rose Langer</div>
						</form>
					</div>
					
					
					<!-- should not be there in stage 1 
					
					<div class="col-sm-3">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="8">
							<input type="image" src="profile.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">Emma Joseph(therapist)</div>
						</form>
					</div>
					
					<div class="col-sm-3">
						<form class="form1" action="char.php" method="post">
							<input type="hidden" name="pid" value="5">
							<input type="image" src="profile.png" name="submitbutton" border="0" alt="" style="padding-left:15vw; padding-top: 1vh;">
							<div class="name">Dr Bill Jones(killer)</div>
						</form>
					</div>
					
					-->
				</div>
			</div>


		</div>


<script>
	document.getElementById("defaultOpen").click();

	function Page(evt, pageName) {
		var i, tabcontent, tablink;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablink = document.getElementsByClassName("tablink");
		for (i = 0; i < tablink.length; i++) {
			tablink[i].className = tablink[i].className.replace(" active", "");
		}
		document.getElementById(pageName).style.display = "block";
  		evt.currentTarget.className += " active";
	}

	function movetoNext(current, nextFieldID) {
		if (current.value.length >= current.maxLength) {
			document.getElementById(nextFieldID).focus();
		}
	}

	function movetoPrev(current, prevFieldID, event) {
		if (event.keyCode == 8) {
			current.value = "";
			document.getElementById(prevFieldID).focus();
		}
	}
</script>
</body>

</html>
