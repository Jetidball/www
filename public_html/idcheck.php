<?php
session_start();
include('connectMC.php');

$user_check=$_SESSION['username'];

// $sql = mysqli_query($db,"SELECT * FROM tasklist GROUP BY MAX(id)");
$result = mysqli_query($db, "SELECT * FROM tasklist ORDER BY id DESC LIMIT 0, 1");

$row=mysqli_fetch_array($result);

$id = $row[0];
echo $id + 1;



