<?php
session_start();
include('connection.php');

$user_check=$_SESSION['username'];

$sql = mysqli_query($db,"SELECT username, id FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$username=$_SESSION['username'];
$gid=$_SESSION['id'];

if(!isset($user_check))
{
header("Location: http://epicloot.us/index.php");
}
?>
