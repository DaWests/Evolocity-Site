
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#hide").click(function(){
        $("form").hide();
      });
      $("#show").click(function(){
        $("form").show();
      });
    });
    </script>
  <link rel="stylesheet" type="text/css" href="styleCSS.css">
</head>
<style>
    
</style>
<body>

<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="#project">Our Project</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#donate">Donate</a></li>
  <li><a class="navbar-brand" href="home.html"><div class="logo-image"><img src="image" class="img-fluid"></div></a></li>
</ul>

<form method ="POST" action="insertDB.php">

            <input name="name" type="text" class="feedback-input" placeholder="Name" /> <br>
            <input name="email" type="email" class="feedback-input" placeholder="Email" /><br>
            <input name="dob" type ="date" class="feedback-input" placeholder="Date of Birth"><br>
                         <textarea name="suggestions" class="feedback-input" placeholder="Suggestions"></textarea><br> 
            <input type="submit" name="submit" value="Submit">
</form>

<div class="twoButtons">
<button id="hide" class="button">Hide</button>
<button id="show" class="button">Show</button>
</div>
</body>