
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet" />

  <!-- Bootstrap 5.0.2 CSS -->
  <link rel="stylesheet" type="text/css"
	    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	  <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

	  <link href="assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
	  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	  <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
	  <link href="assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
	  <link href="assets/css/main.css" class="theme-opt" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="">
	<header id="topnav" class="defaultscroll sticky" style="background-color: #FFF">
		<div class="container">
		  <a class="logo" href="https://gettonote.com">
		    <img
		      src="assets/images/logo-b.png"
		      height="24"
		      class="logo-light-mode"
		      alt="ToNote Brand"
		    />
		    <img
		      src="assets/images/logo-b-light.png"
		      height="24"
		      class="logo-dark-mode"
		      alt="ToNote Brand"
		    />
		  </a>

		  <div class="menu-extras">
		    <div class="menu-item">
		      <a class="navbar-toggle" id="isToggle" @click="toggleMenu">
		        <div class="lines">
		          <span></span>
		          <span></span>
		          <span></span>
		        </div>
		      </a>
		    </div>
		  </div>

		  <div class="lg-screen">
		    <ul class="buy-button list-inline mb-0">
		      <li class="list-inline-item mb-0">
		        <a href="https://user.gettonote.com/" target="_blank">
		          <div class="btn btn-sm fw-size mybtn">Sign In</div>
		        </a>
		      </li>

		      <li class="list-inline-item ps-1 mb-0">
		        <a href="https://user.gettonote.com/register" target="_blank">
		          <div class="btn btn-sm btn-primary fw-size mybtn">
		            Start free trial
		          </div>
		        </a>
		      </li>
		    </ul>
		  </div>

		 <?php include("navbar.php") ?>
		</div>
		</header>
</div>


