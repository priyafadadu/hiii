<?php
	$conn = mysqli_connect("localhost", "root", "root", "blog_samples");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>