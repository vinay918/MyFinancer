<?php

//include your functions here

	session_start();

	$link = mysqli_connect("localhost","USER","PASSWORD","DATABASE NAME");
	
	if(mysqli_connect_errno()){
		print_r(mysqli_connect_error());
		exit();
	}

	if($_GET['function']=="logout"){
		session_unset();
	}
	
	//if($_GET['page']){
		//header("Location:https://stackoverflow.com/questions/2112373/php-page-redirect");
	//}
	
?>
