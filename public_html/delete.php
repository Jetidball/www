<?php
	include("check2.php");
/*
DELETE.PHP
Deletes a specific entry from the 'players' table
*/
global $username;
$CreatedBy = $_GET['CreatedBy'];
if ($CreatedBy == $username)
{
    $usermatch = true;
}else {
    $usermatch = false;
    echo "Error: " . $username . "did not create this post" . $CreatedBy . "is the original Creator";
}
// connect to the database
include('connectMC.php');

// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id']) && is_numeric($_GET['id']) && ($usermatch==true))
{

// get id value
$id = $_GET['id'];
// delete the entry
$sql4="DELETE FROM tasklist WHERE id='$id'";

	if (mysqli_query($db,$sql4)) {
	  echo "Edits Succesfully Deleted: Redirecting";
		header("refresh:1;url=view.php");
	} else {
	  echo "Error: " .$sql4 . "<br />" . mysqli_error($db);
	}
	mysqli_close($db);
// $result = mysql_query("DELETE FROM players WHERE id=$id")
// or die(mysql_error());

// redirect back to the view page
header("Location: view.php");

}
else
// if id isn't set, or isn't valid, redirect back to view page
{
header("Location: view.php");
}

?>