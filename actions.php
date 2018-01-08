<?php

include("functions.php");

if($_GET['action']=="loginSignup"){
	//validation
	
	$errorString="";
	
	if(!$_POST['email']){
		$error = "An email address is required";
	}
	else if(!$_POST['password']){
		$error = "A password is required";
	}
	else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid email format"; 
	}
	
	if($error!=""){
		echo($error);
		exit();
	}
	
	
	if($_POST['loginActive']=="0"){
		//Sign Up operations
		if(!$_POST['budget']){
			$error = "Please enter your estimated monthly budget.";
		}
		$query="SELECT * FROM Users WHERE `Email` ='".mysqli_real_escape_string($link,$_POST['email'])."';";
		$result = mysqli_query($link,$query);
		if(mysqli_num_rows($result)>0 && $error==""){
			$error = "Email already taken";
		}else if($error==""){
			$query = "INSERT INTO Users (`Email`,`Password`,`Budget`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."','".mysqli_real_escape_string($link,$_POST['budget'])."');";
			if(mysqli_query($link,$query)){
				$_SESSION['id']=mysqli_insert_id($link);
				$query = "UPDATE Users SET Password='". md5(md5($_SESSION['id']).$_POST['password'])."' WHERE UserId=".$_SESSION['id'].";";
				$result = mysqli_query($link,$query);
				echo(1);
			}else{
				echo(0);
			}
		}
	}
	else{
		//Logging In
		$query="SELECT * FROM Users WHERE `Email` ='".mysqli_real_escape_string($link,$_POST['email'])."';";
		$result = mysqli_query($link,$query);
		$row = mysqli_fetch_assoc($result);
		if($row['Password'] == md5(md5($row['UserId']).$_POST['password'])){
			$_SESSION['id']=$row['UserId'];
			echo(1);
		}else{
			echo("Invalid Email/Password");
		}
				
			
	}
	
	if($error!=""){
		echo($error);
		exit();
	}
}



?>