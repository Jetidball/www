<?php
session_start();
include('regconnect.php');

$user_check=$_SESSION['username'];

$sql = mysqli_query($db,"SELECT playername FROM players WHERE playername='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$username=$_SESSION['username'];

if(!isset($user_check))
{
header("Location: http://epicloot.us/minecraftlogin.php");
}
?>
