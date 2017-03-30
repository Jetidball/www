<?php
	include("check2.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
 <link rel="stylesheet" href="style.css" type="text/css" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
 #community {
  width: 60%;
  height: 65%;
  border: 2px solid black;
  background-color: #FFA07A;
  box-sizing: border-box;
  padding:1%;
  font-weight:bold;
  
 }
</style>
</head>

<body id="minecraftbg">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="main-content" id="minecraft">
          <h1 class="hello">Hello, <em><?php echo $username;?>!</em></h1>
          <br>
          <h1> Welcome to the epicloot minecraft server!!! </h1>
          <p> alot more minecraft stuff to come soon! like comments and notes for the group! </p>
          <ul>
            <li>
              <h2 id ="community"><a href="http://epicloot.us/view.php">View Community Dashboard</a></h2>
            </li> 
            <br>
            <li>
              <a href="http://minecraft.epicloot.us">Check if Minecraft is up!</a>
            </li>
            <br>
            <li>
              <a href="http://minecraft.epicloot.us:8081">Check advanced minecraft server logs!</a>
            </li>
						<li>
				<a href="http://minecraft.epicloot.us:8124">Minecraft Original Map</a>
			</li>
            <li>
              <a href="javascript:history.back()">Go Back</a>
            </li>
            <li>
              <a href="logout.php" style="font-size:18px">Logout?</a>
            </li>
          </ul>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
