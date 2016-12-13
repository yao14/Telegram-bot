<?php


$query_count="SELECT * FROM  `array`";


	$result_count = mysqli_query($conn, $query_count);

	if ($result_count){
	   echo "true";
	   $row_count=mysqli_fetch_assoc ($result_count);
	   $array_count=$row_count["count"];
	   echo '<br>'.$array_count;
		//return true;
	}else {
		//echo "false";
		//$error=mysqli_error($conn);
		echo mysqli_error($conn);
	}


?>