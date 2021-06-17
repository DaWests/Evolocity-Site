
<head>
        <title>My Project Site</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="styleCSS.css">
		<script src="./js/jquery-3.5.1.min.js"></script>
        <script src="./js/menu.js"></script>  
</head>

<body>

      	<header>
		  <div class="container">
			  <span class="menu-button">Menu</span>
					<nav class ="hide-on-mobile">
                    <!--<b class="navbar-brand" href="home.html"><div class="logo-image"><img src="images/evoLogoPurp.png" class="img-fluid"></div></b> -->
						<a href="home.html">Home</a>
						<a href="project.html">Our Project</a>
						<a href="input.php">Contact</a>
						<a href="donate.html">Donate</a>
					</nav>
		  </div>

		</header>

<h1>CONTACT / FEEDBACK</h1>

<form method ="POST" action="insertDB.php">

            <input name="name" type="text" class="feedback-input" placeholder="Name" /> <br>
            <input name="email" type="email" class="feedback-input" placeholder="Email" /><br>
            <input name="dob" type ="date" class="feedback-input" placeholder="Date of Birth"><br>
                         <textarea name="suggestions" class="feedback-input" placeholder="Suggestions"></textarea><br> 
            <input type="submit" name="submit" value="Submit">
</form>

</body>