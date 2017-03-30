<?php
	include("check.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script src="jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">$(document).ready( function() { $('div.index-right').eq(0).append($('div#my-content')); setInterval(function(){ var iframe1 = $('iframe#iframe-1'); iframe1.attr('src', iframe1.attr('src')); }, 300000); });</script>
</head>

<body>
<h1 class="hello">Hello, <em><?php echo $username;?>!</em></h1>
<br><br><br>
<h1> Welcome to the Discord Json area</h1>

<div class="disc">
    <div class="row">
        <div class="col-xs-2 col-md-2 col-xs-2">
            <div id="my-content"><center><iframe id="iframe-1" src="https://discordapp.com/widget?id=239501994262265866&theme=dark" height=400px allowtransparency="true" frameborder="0"></iframe> Refreshes Every 5 Minutes</center></div>
        </div>

    </div>
                            <!--<a href="http://epicloot.us:8081">Check if Minecraft is up!</a>-->
            <br><br><br>
            <a href="https://discordapp.com/api/webhooks/243230389634727937/c3Lq4UV7mDuRH94l9JLca8qbMDzDXnd4xagtjWcm6AOH8OvwuAckRTTlajybyLW3qkcr"></a>
            <!--<a href="010101php010101">Check phpmyadmin!!</a>-->
            <br><br><br>
            <!--<a href="minecrafthome.php">MineCraft Homepage!</a>-->
            <br><br><br>
            <a href="logout.php" style="font-size:18px">Logout?</a>
</div>
</body>
</html>
