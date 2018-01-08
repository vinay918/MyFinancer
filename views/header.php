<!doctype html>
<html lang="en">
  <head>
    <title>My Financer Web App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	
	<link href="customCss/mystyles.css" rel="stylesheet">
	
	<style>
	#loginAlert {
		display:none;
	}
	
	body { 
	padding-top: 70px; 
	}

	.navbar a {
		color: white;
	}

	.hoverer:hover { 
		background-color: yellow;
	}

	#toggleLogin {
		padding-right: 20px;
	}

	#myDivver {
		text-align: center;
		background-color:white;
	}

	.resize_fit_center {
		vertical-align: middle;
		max-width:100%;
		max-height:100%;
	}	
	</style>

  </head>
  <body>
  
     <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="?page=YOURHOMEPAGE">MyFinancer</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" id="navText" href="?page=YOURPAGE">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?page=views/about.php">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?page=YOURPAGE">Contact</a>
            </li>				
          </ul>
		  <div class="form-inline pull-xs-right">
			<?php if ($_SESSION['id']){ ?>
				<a class="btn btn-success-outline" href="?function=logout" >Logout</a>
			<?php } else{ ?>
			<button class="btn btn-success-outline" data-toggle="modal" data-target="#myModal" >Login/Sign Up</Button>
			<?php } ?>
		  </div>
        </div>
      </div>
    </nav>
	<br/>