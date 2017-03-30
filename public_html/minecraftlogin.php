<?php
include('checkminecraftlogin.php'); // Include Login Script
if ((isset($_SESSION['playername']) != ''))
{
header('location: http://epicloot.us/minecrafthome.php');
exit();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Form with Session</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<center><h1 id="phptitle">Login for the best features!!!!</h1></center>
<div class="loginBox">
<h3>Login Form</h3>
<br>
<form method="post" action="">
<label>Username:</label><br>
<input type="text" name="username" id="username" placeholder="playername" /><br>
<label>Password:</label><br>
<input type="password" name="password" id="password" placeholder="password" />  <br>
<input type="submit" id="submit" name="submit" value="Login" />
</form>
<div class="error"><?php echo $error; echo $username; echo $result;?></div>
<div class="extra" style="background:lightblue;">
<a href="http://epicloot.us">Back to main site!</a>
<br><br>
<h2><bold><center>
<a href="http://epicloot.us/register.php" style = "color:red;">if you dont have an account sign up here!!!</a>
</h2></bold></center>
</div>
</div>
</body>
</html>
