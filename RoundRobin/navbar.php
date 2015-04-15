<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RoundRobin - Invest in Your Nest!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container" style="margin-bottom: 90px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="logo_new.png" width="75%" height="380%"/></img></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">About</a>
                    </li>

             
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="project-salad.php">Food & Drink</a>
                            </li>
                            <li>
                                <a href="project-app.php">Apps</a>
                            </li>
                            <li>
                                <a href="project-tech.php">Technology</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profiles<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile-featured.php">Featured</a>
                            </li>
                            <li>
                                <a href="service-home.php">Services</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pricing.php">Pricing</a>
                    </li>

                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
<?php
				error_reporting(0);
				session_start();
	
				if (!isset($_SESSION['username']))
				{
	
?>
                    <li>
                        <a href="adminlogin.php">Log in</a>
                    </li>
<?php
				}
				else{
					$id = $_SESSION['username'];
					//echo "Welcome $id!";
?>
					<li>
                        <a href="logout.php">Log out</a>
                    </li>
<?php
				}
?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

</html>
