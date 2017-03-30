<?php
	require_once("check2.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>

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
	html {
		overflow:scroll;
	}
    body, html {
        height:100%;
        height:auto;
        width:100%;
        width:auto;
    }
    body {


    }
	a {
		color:#000;
		font-size:15px;
	}
	.container {
	}
	.hello{
		font-size:25px;
		font-weight:bold;
		padding:10px;
		color:#fff;
	}
	#uploader{
	    background: #E7C727;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        padding:0px;
        text-align:center;
        color:#0C4AFA;
        font-size:18px;
        font-weight:bold;
	}
	#submitupload{
	    color:white;
	    background: #1A4CCF;
	}
    </style>
</head>

<body>
<div class="container">
<h1 class="hello">Hello, <em><?php echo $username;?>!</em></h1>
<h1 style="color:white;"> Welcome to the privelaged user area! </h1>
<br>
            <div class="btn-group" style="border-bottom:2px solid black;">
                <a href="minecrafthome.php" class="btn btn-success">MineCraft Homepage!</a>
                <a href="http://minecraft.epicloot.us:8080" class="btn btn-primary">Check if Minecraft is up!</a>
                <a href="discord.php" class="btn btn-success">Discord Web App!!!</a>
                <a href="010101php010101#" class="btn btn-primary">Check phpmyadmin!!</a>
                <a href="epicloot.us/uploads/<?php echo $username;?>/" class="btn btn-success">Your files on the server</a>
								<a href="http://epicloot.us/wowcalc.html" class="btn btn-primary">Wow Experience Calculator </a>
            </div>
            <br>
<!--<img src="epiclootlogoBOXColorFlip.png" class="img-responsive" alt="EpiccLoot Chest">-->

<div class="row">
    <div class="col-xs-6">
        <img src="80FramesChest.gif" class="img-responsive" alt="EpiccLoot Chest">
    </div>
<div class="col-xs-4" id="uploader" style="margin-top:30%;">
<form action="upload.php" method="post" enctype="multipart/form-data" style="padding:3px;padding-bottom:12px;" class="btn-group btn-group-justified">
    <a><p style="margin-bottom:3px;margin-left:0px;background:#E8DEAD;"><u>Upload a File:</u></p> <label class="btn btn-info btn-file"><p style="color:#000">Browse</p><input type="file" name="fileToUpload" id="fileToUpload" size="25" style=""></label></a>
    <a><label class="btn btn-info btn-file">Subtmit <br> Upload<input type="submit" value="Upload Image" name="submit" id="submitupload" style="display:none;"><br></label></a>
    <br>

</form>
</div>
<div class="col-xs-12">
<a href="logout.php" style="font-size:12px"><button type="button" class="btn btn-primary btn-sm">Logout?</button></a>
</div>
</div>
</div>
</body>
</html>
