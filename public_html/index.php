<?php
require_once('checklogin.php'); // Include Login Script
if ((isset($_SESSION['username']) != ''))
{
header('location: http://epicloot.us/home.php');
exit();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Form with Session</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script src="jquery-2.1.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
    function resizeBody() {
    var w = window.outerWidth;
    var h = window.outerHeight;

}
</script>
    <style>
    body, html {
        height:100%;
        height:auto;
        width:100%;
        width:auto;
    }
    body {
        width:90%;
        height:90%;

    }

    .logincontent {
        border: 1px dashed gray;
        padding-bottom:20%;
        padding-right:20%;
    }
    }
    #bl1 {
        padding 0.5%;
    }
    #phptitle {
        margin-top:2%;
        color:#fff;
    }
    .loginBox {
        border: 1px dashed gray;
        height: 20em;
        white-space: pre-wrap;
        overflow: scroll;
    }
    .loginBox::-webkit-scrollbar {
        display: none;
    }
    </style>
</head>

<body onresize="resizeBody()">
<div class="logincontent">
<center><h1 id="phptitle">Login for the best features!!!!</h1></center>
<div class="loginBox">
<h3><b><u>EpicLoot Login</u></b></h3>
<form method="post" action="">
<label>Username:</label>
<input type="text" name="username" id="username" placeholder="username" />
<label>Password:</label>
<input type="password" name="password" id="password" placeholder="password" />
<input type="submit" id="submit" name="submit" value="Login" />
</form>
<div class="error"><?php echo $error; echo $username; echo $result;?></div>
<a href="http://epicloot.us">Back to main site!</a>
<button id="bl1" onclick="window.location='http://epicloot.us/register.php';">Sign Up!</button>
<br>
</div>
</div>
</body>
</html>
