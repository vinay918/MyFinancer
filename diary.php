<?php

	include("functions.php");
	include("views/header.php");
	session_start();
	if($_SESSION['id']){
		echo("Active Session:Your Homepage id=".$_SESSION['id']);
	}else{
		header("Location:http://vinays.sgedu.site/");
	}
	include("views/footer.php");
?>