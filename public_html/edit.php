<?php
	require_once("check2.php");
?>

<?php
/*
EDIT.PHP
Allows user to edit specific entry in database
*/
// creates the edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $playername, $server, $title, $location, $description, $error)

{

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Edit Record</title>
</head>
<body>

<?php

// if there are any errors, display them
    ini_set('display',1);
	error_reporting(E_ALL);
 if ($error != '')
    {
        echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
    }

?>

<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<div>
<p><strong>Posting: #</strong> <?php echo $id; ?></p>
<strong>playername: *</strong> <input type="text" name="playername" value="<?php echo $playername; ?>" /><br/>
<strong>server: *</strong> <input type="text" name="server" value="<?php echo $server; ?>" /><br/>
<strong>title: *</strong> <input type="text" name="title" value="<?php echo $title; ?>" /><br/>
<strong>location: </strong> <input type="text" name="location" value="<?php echo $location; ?>" /><br/>
<strong>description: </strong> <input type="text" name="description" value="<?php echo $description; ?>" /><br/>
<p>* Required</p>
<input type="submit" name="submit" value="Submit">
</div>
</form>
</body>
</html>

<?php

}
ini_set('display',1);
error_reporting(E_ALL);

// connect to the database
include('connectMC.php');

// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];
$playername = $_POST['playername'];
$server = $_POST['server'];
$title = $_POST['title'];
$location = $_POST['location'];
$description = $_POST['description'];

$id = mysqli_real_escape_string($db, $id);
$playername = mysqli_real_escape_string($db, $playername);
$server = mysqli_real_escape_string($db, $server);
$title = mysqli_real_escape_string($db, $title);
$location = mysqli_real_escape_string($db, $location);
$description = mysqli_real_escape_string($db, $description);

// check that firstname/lastname fields are both filled in

if ($playername == '' || $server == '' || $title == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';

//error, display form

renderForm($id, $playername, $server, $title, $location, $description, $error);

}

else

{
    
// save the data to the database

// mysql_query("UPDATE players SET firstname='$firstname', lastname='$lastname' WHERE id='$id'")
$sql2="UPDATE tasklist SET playername='$playername', server='$server', title='$title', location='$location', description='$description' WHERE id='$id'";

	if (mysqli_query($db,$sql2)) {
	  echo "Edits Succesfully Submited: Redirecting";
		header("refresh:1;url=view.php");
	} else {
	  echo "Error: " .$sql2 . "<br />" . mysqli_error($db);
	}
	mysqli_close($db);
	
// once saved, redirect back to the view page

// header("Location: view.php");

}
}
else
{

// if the 'id' isn't valid, display an error

echo 'Error!';

}
}
else

// if the form hasn't been submitted, get the data from the db and display the form

{

// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

// query db
$id = $_GET['id'];
$sql = "SELECT * FROM tasklist WHERE id='$id'";
$result = mysqli_query($db,$sql)
or die(mysqli_error());
$row = mysqli_fetch_array($result);

// check that the 'id' matches up with a row in the databse
if($row)
{

// get data from db
$playername = $row['playername']; 
$server = $row['server'];
$title = $row['title'];
$location = $row['location']; 
$description = $row['description'];

// $row['ModifiedBy'] .
// $row['server'] . 
// $row['title'] . 
// $row['location'] . 
// $row['description']

// show form

renderForm($id, $playername, $server, $title, $location, $description, '');

}

    else
    // if no match, display result
    {
     echo "No results!";
    }
}
    else
    // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
    {
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        echo 'Error!';
    }
}

?>