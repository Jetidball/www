<?php
session_start();
include('connectMC.php');

$user_check=$_SESSION['username'];

$sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$username=$_SESSION['username'];

if(!isset($user_check))
{
mysqli_close($db);
header("Location: http://epicloot.us/index.php");
}