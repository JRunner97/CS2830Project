<?php

    if(!session_start()){
        header("Location: /error.php");
        exit;
    }

	$currentUser = empty($_SESSION['currentUser']) ? false : $_SESSION['currentUser'];
	if (!$currentUser) {
		header("Location: /loginHandler.php");
		exit;
	}
?>
<!DOCTYPE  html>
<html lang="en">

    <head>
    
        <title>Spring Break 2018</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Styles/project.css">
        <link rel="stylesheet" type="text/css" href="Styles/myStyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="Scripts/myScript.js"></script>
    </head>

    <body id="homeBody">
        <nav>
            <div class="navbar">
                <div class="logoCircle">
                    <img src="https://static.thenounproject.com/png/22529-200.png" alt="lemur logo">
                </div>

                <a href="loginHandler.php"><h2 id="header">Zen Culture</h2></a>
                <button class="fas fa-bars slide-toggle"></button>
            </div>

            <hr>

            <div class="sidebar">
                <div class="sidebar-content">
                    <i class="fas fa-times exit-sidebar"></i>
                    <a href="homePage.php"><h3>Home</h3></a>
                    <hr>
                    <a href="aboutUs.php"><h3>About Us</h3></a>
                    <hr>
                    <a href="logMeOut.php"><h3>Logout</h3></a>
                </div>
            </div>

            <div class="sidebarOverlay"></div>
        </nav>
            
        <div id="aboutUsContent">
            
            <div class="banner"></div>
            <br>
            <div class="spacing"></div>
            <div id="authorBox">
                <div class="crop-author">
                    <img src="https://scontent-ort2-2.xx.fbcdn.net/v/t31.0-8/23550248_756628921204155_8195512332060398294_o.jpg?_nc_cat=100&_nc_ht=scontent-ort2-2.xx&oh=27055813c4745e36fda11ad9674df479&oe=5CB26743" alt="Author Picture">
                </div>
                <div class="about-author">
                    <br>
                    <p><strong>By:</strong> Joshua Thompson</p>
                    <br>
                    <p><strong>Published:</strong> 11/18/2018</p>
                    <br>
                    <p><strong>Email:</strong> jltmh3@mail.missouri.edu</p>
                </div>
                <div class="crop-article-picture">
                    <img src="http://ec2-18-221-150-95.us-east-2.compute.amazonaws.com/Photos/ChicagoMuseum.jpg" alt="article picture">
                </div>
            </div>
            <div class="article-content">
                <h1>Spring Break 2018</h1>
                <p>This picture was taken at the Chicago History Museum on the tail end my spring break trip with friends in 2018. Four of my friends and I camped out in the Smokey Mountains for 4 days. During which, we went hiking and explored neighbouring Gatlinburg (a terrible town). After leaving the mountains, we drove to Chicago to spend a few days at our friend Lily's house. We roamed downtown, watched scary movies, and tried new food.</p>
            </div>
        </div>
        
        
    </body>
</html>
