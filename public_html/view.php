<?php 
require_once("check2.php");
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>View Records</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css" type="text/css">
	<script src="jquery-2.1.4.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 	   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 		 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body style="overflow:scroll; margin:0">
<div class="container">
 <div class="nav-menu">
 	<div class="row">
 		<div class="col-xs-1">
 			
 			<a href="minecrafthome.php"><button type="button" class="btn btn-primary btn-sm">Minecraft-Home</button></a>
 		</div>
 		<div class="col-xs-1">
 			<a href="index.php"><button type="button" class="btn btn-primary btn-sm">User-Page</button></a>
 		</div>
 	</div>
 </div>
	
<?php


/*
	VIEW.PHP
	Displays all data from 'players' table
*/

	// connect to the database
	require_once('connectMC.php');

	// get results from database
	$result = mysqli_query($db, "SELECT * FROM  tasklist")
		or die(mysql_error());
		mysqli_close($db);

	// display data in table
  echo "<div id='main' style='font-size:20px;'>";
  echo "<div class='heading1'>";
  echo "<h1><p><b>Minecraft Quests!</b></p></h1>";
  echo "</div>";
	//echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
  echo "<div class='row'>";
  echo "<div class='col-xs-6 col-lg-12'>";
  echo "<div class='table1' style='font-size:20px'>";
	echo "<table class='table table-bordered table-responsive' id='tableView' border='3' cellpadding='10' padding='2'>";
	echo "<tr> <th>Post#</th> <th>Title </th> <th>Created On</th> <th>Created By</th> <th>Server</th> <th>Location</th>  <th>Description</th> <th>Edit</th> <th>Delete</th></tr>";
	
		
	// loop through results of database query, displaying them in the table
	while($row = mysqli_fetch_array( $result )) {

		// echo out the contents of each row into a table
		
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['title'] . '</td>';
		echo '<td id="time">' . $row['CreatedOn'] . '</td>';
		//echo '<td>' . $row['modified'] . '</td>';
		echo '<td>' . $row['CreatedBy'] . '</td>';
		//echo '<td>' . $row['ModifiedBy'] . '</td>';
		echo '<td>' . $row['server'] . '</td>';
		//echo '<td>' . $row['title'] . '</td>';
		echo '<td>' . $row['location'] . '</td>';
		echo '<td>' . $row['description'] . '</td>';
		
		echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . $row['id'] . "&CreatedBy=" . $row['CreatedBy'] . '">Delete</a></td>';
		echo "</tr>";
		echo "</div>";

	}

	// close table>
	 echo "</table>";
    
    
	echo "</div></div>";
	mysqli_close($db);
?>
 <center><p><a href="new.php">Add a new record</a></p></center>
	 <!--<div id="accordion">-->
	 <!--	<h3> something</h3>-->
	 <!--	<div>-->
	 <!--		stuff-->
	 <!--	</div>-->
	 <!--	<h3> something </h3>-->
	 <!--		<div>-->
	 <!--		stuff-->
	 <!--	</div>-->
	 <!--</div>-->
 </div>
 	    <script>
        function autoResizeDiv()
        {
            document.getElementById('main').style.height = window.innerHeight +'px';
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
    </script>
    
    </div>
    <style>
    .table1 table, th, td {
    	
    }
    	#time {
    		font-size:15px;
    	}
    </style>
</body>
</html>