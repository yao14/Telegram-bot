<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bot";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	    
	} else
	{
		//echo "working";
	}
?>

<?php


function writeMsg() {
    echo "Hello world!";


    
}



?>