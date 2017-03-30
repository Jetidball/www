<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'minecraftdata');
define('DB_PASSWORD', 'beDYByy9WRzK38eD');
define('DB_DATABASE', 'Minecraft');

//connect
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
