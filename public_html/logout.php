<?php
session_start();
if(session_destroy())
{
header("location: http://epicloot.us/index.php");
}

?>
