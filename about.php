<?php 
    session_start();
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
				background-attachment: fixed; 
				color: white; 
				text-align: center; 
				font-family:"I AM SHERLOCKED";
			}

            #home 
			{	font-family: "Cormorant Garamond"; 
				font-size: 4vw; 
				font-weight:800; 
				text-align: right;
			}

            .container { padding: 1vh 1vw; }

            .container .content .text-body 
			{	font-family: "Cormorant Garamond"; 
				border-radius: 1vw; 
				background: #333; 
				padding: 1vh 1vw; 
				opacity:0.7;
			}

            .container .content .text-body .text 
			{	text-align: justify; 
				padding:1vh;
			}

        </style>
    </head>
    <body>
        <img src="at.png" align="left" height="60vw" width="102vw"></img>
        <div id="home">
            <?php 
                if (isset($_SESSION["logged"])){
                    echo '<a href="all.php" style="color:#ff6f05; text-shadow:1vw 1vw 1vw #333; text-decoration:none; padding:3vw;">HOME</a>';
                }
                else{
                    echo '<a href="home.php" style="color:#ff6f05; text-shadow:1vw 1vw 1vw #333; text-decoration:none; padding:3vw;">HOME</a>';
                }
            ?>
            
        </div>
        <section class="container">
            <div class="content">
                <h1 style="font-size:5vw;"> ABOUT US </h1>
                <div class="text-body">
                    <img src="poster.jpg" align="center" height="80%"" width="55%""></img> </br>
                    <div class="text" style = "font-size:3vw;">
                        Lorem ipsum vehicula eu id vehicula blandit consequat commodo vel eu, sem inceptos at faucibus cras eros fames himenaeos imperdiet a, phasellus elementum curabitur feugiat eros donec auctor ultrices commodo vulputate senectus nisi tortor torquent class eros himenaeos lectus posuere, tempor sit luctus porttitor malesuada dolor curae elit scelerisque, vel scelerisque est porta tempor varius suscipit cubilia aenean etiam dapibus aptent phasellus ligula primis, cursus dictum conubia quam bibendum, enim elit nisi erat velit.
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>