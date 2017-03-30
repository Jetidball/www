<?php
	include("check2.php");
?>

<?php
//if they DID upload a file...
if($_FILES['fileToUpload']['name'])
{
	//if no errors...
	if(!$_FILES['fileToUpload']['error'])
	{
		//now is the time to modify the future file name and validate the file
	    $new_file_name = strtolower($_FILES['fileToUpload']['tmp_name']); //rename file
		if($_FILES['fileToUpload']['size'] > (1024000000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is to large.';
		}
		//$allowed = array('exe','xperl','gimp');
		$filename = $_FILES['fileToUpload']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(preg_match("/\.(exe)$/", $filename))
        {
            $valid_file=false;
            $message =  'invalid file type';
        }
		else { $valid_file = true; }
		//if the file has passed the test
		if($valid_file)
		{
			//move it to where we want it to be
			$currentdir = getcwd();
			$UserFile = '/uploads/' . $username . '/';
			$target = $currentdir . $UserFile . basename($_FILES['fileToUpload']['name']);
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
			$message = 'Success!  Your file was submitted.';
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['fileToUpload']['error'];
	}
	//header("refresh:1;url=http://epicloot.us/home.php");
}

//you get the following information for each file:

?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="jumbotron"> 
            
            <h1> <?php echo $message;?> </h1>
            <?php
                if ($valid_file)
                {
                    echo '<p> It can be found here </p> <a>http://epicloot.us/uploads/' . $username . '</a>';
                }
            ?>
            </div>
                    <script>
                setTimeout(function(){
                    window.location.href="javascript:history.back()"; // The URL that will be redirected too.
                }, 5000); // The bigger the number the longer the delay.
            </script>
        
        <p> you will be auto matically redirecited in 5 seconds.</p>
        </div>
    </body>
    
    
    
</html>