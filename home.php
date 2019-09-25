<?php session_start();
if (!isset($_SESSION["init"])){
    $_SESSION["init"] = 0;
}
?>
<html>
    <head>
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

            body
			{	background:url("home bg.png");
				background-size:100% 100%;
				background-attachment:fixed;
				color: white;
				font-size: 8vw;
				text-align: center;
				font-family:"I AM SHERLOCKED";
			}

			#container
			{	width:100%;
				padding-top: 50vw;
			}

      #container .box { margin:1% 2% 1% 2%; }

			#container .box .field
			{	width:13vw;
                height:13vw;
				text-transform: uppercase;
				text-align: center;
                font-size: 8vw;
				font-family:"I AM SHERLOCKED";
				margin-right:13vw;
			}

			#container .box #field4 { margin-right: 0vw; }

			#container .box #submit
			{	border-radius:10vw;
				font-family:"Raleway";
				font-size: 5vw;
				text-shadow:1vw 1vw 2vw #333;
				font-weight:800;
                padding:2vw;
				background:url("blood.jpg");
				background-size: cover;
			}

			#container .box #submit:hover { border:3px solid #bbb; }

	    	#about
			{ 	width:100%;
				font-family:"Cormorant Garamond";
				font-size:4vw;
				font-weight:800;
				text-align:right;
			}

        </style>
	<script type="text/javascript">
		function movetoNext(current, nextFieldID) {
			if (current.value.length >= current.maxLength) {
				document.getElementById(nextFieldID).focus();
			}
		}
		function movetoPrev(current, prevFieldID,event) {
    			if (event.keyCode==8) {
				current.value="";
				document.getElementById(prevFieldID).focus();
			}
		}
	</script>
    </head>
    
    <body>
	<img src="at.png" align="left" height="60vw" width="102vw"></img>
	<section id="about">
		<a id="link" href="about.php" style="color:#ff6f05; text-shadow:1vw 1vw 1vw #333; text-decoration:none; padding:3vw"> ABOUT </a>
	</section>
        <section id="container">
            
            <div class="box">
                <form action="login_validate.php" class="form" method="POST">
                    I AM</br></br>
                    <?php
               if( ($_SESSION["init"] == 1) && ($_SESSION["valid"]==0))
               {
                   echo'<p align="center"><font color="orange"> INVALID</font></p>';
               }
               ?>
                    <input type="number" maxlength="1" class="field" id="field1" name="input1" onkeyup="movetoNext(this, 'field2')"/><input type="number" maxlength="1" class="field" id="field2" name="input2" onkeyup="movetoNext(this, 'field3')" onkeydown="movetoPrev(this,'field1',event)"/><input type="number" maxlength="1" class="field" id="field3" name="input3" onkeyup="movetoNext(this, 'field4')" onkeydown="movetoPrev(this,'field2',event)"/><input type="number" maxlength="1" class="field" id="field4" name="input4" onkeydown="movetoPrev(this,'field3',event)"/>
                    </br> </br> LOCKED</br></br>
                    <input type="submit" id="submit" value="    LET'S BEGIN    ">
                </form>
            </div>
        </section>
    </body>
   
</html>
