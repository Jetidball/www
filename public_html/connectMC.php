<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'minecraftsql');
define('DB_PASSWORD', 'zaMBQRKs85cmxvXB');
define('DB_DATABASE', 'Minecraft');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>