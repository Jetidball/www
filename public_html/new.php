<?php
	require_once("check2.php");
?>

<?php
/*
NEW.PHP
Allows user to create a new entry in the database
*/

// creates the new record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable


function renderForm($playername, $server, $title, $location, $description, $error)
{
	global $username;
	$CreatedBy = $username;
	global $id;
	$id = $pid;
  

    
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>New Record</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" type="text/css">
	<script src="jquery-2.1.4.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<style>
		form {
			padding-top:1%;
			padding-left:1%;
		}
	</style>
</head>
<body>

<?php

// if there are any errors, display them
if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}

?>

<form action="" method="post">
<div class="container">
<strong><p>Post # </strong><?php include("idcheck.php"); ?></p><br/>
<strong>server: *</strong> <select name="server">
  <option value="<?php echo $server="Original"; ?>">Original</option>
  <option value="<?php echo $server="Dungeon[Hard]"; ?>">Dungeon[Hard]</option>
  <option value="<?php echo $server="Yoshi's Island"; ?>">Yoshi's Island</option>
  <option value="<?php echo $server="Parkour"; ?>">Parkour</option>
</select>  <br/>
<strong>title: *</strong> <input type="text" name="title" value="<?php echo $title; ?>"/><br/>
<strong>location: </strong> <input type="text" name="location" value="<?php echo $location; ?>"/><br/>
<strong>description: </strong> <textarea name="description" rows="10" cols="10" value="<?php echo $description; ?>"></textarea> <br/>
<p><b>* required</b></p>
<input type="submit" name="submit" value="Submit">
</div>
</form>
</body>
</html>

<?php

}

// connect to the database

include('connectMC.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database

if (isset($_POST['submit']))

{

// get form data, making sure it is valid

$server = mysqli_real_escape_string($db, htmlspecialchars($_POST['server']));
$title = mysqli_real_escape_string($db, htmlspecialchars($_POST['title']));
$location = mysqli_real_escape_string($db, htmlspecialchars($_POST['location']));
$description = mysqli_real_escape_string($db, htmlspecialchars($_POST['description']));
$CreatedBy = $username;
$ModifiedBy = $username;
$playername = $username;

// check to make sure both fields are entered

if ($CreatedBy == '' || $server == '' || $title == '')
{
// generate error message
$error = 'ERROR: Please fill in all required fields!';

// if either field is blank, display the form again

renderForm($server, $title, $location, $description, $error);


}

else

{

// save the data to the database

$sql5="INSERT INTO tasklist (playername, server, title, location, description, CreatedBy, ModifiedBy)
VALUES ('$playername', '$server', '$title', '$location', '$description', '$CreatedBy', '$ModifiedBy')";

// once saved, redirect back to the view page

if (mysqli_query($db, $sql5)) {
			  echo "creation Succesfully Submited: Redirecting";
				header("refresh:1;url=view.php");
			} else {
			  echo "Error: " . $sql5 . "<br />" . mysqli_error($db);
			}
			mysqli_close($db);

}

}
else

// if the form hasn't been submitted, display the form

{
renderForm('','','','');
}

?>