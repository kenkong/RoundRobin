<?php

include('navbar.php');

?>

<html>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide" style="margin-top: 60px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('front1.png'); background-size: 45% 80%; background-repeat: no-repeat;"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('front2.png'); background-size: 45% 80%; background-repeat: no-repeat;"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('front3.png'); background-size: 45% 80%; background-repeat: no-repeat;"></div>
                <div class="carousel-caption">
                    <h2></h2>

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <div style="margin-top: 80%;"><img align="bottom" height="20%" width="20%" src="left_arrow.png"></img></div>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <div style="margin-top: 80%;"><img align="bottom" height="20%" width="20%" src="right_arrow.png"></img></div>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Projects
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-home"></i>Salad Restaurant</h4>
                    </div>
                    <div class="panel-body">
                        <p>I am working on opening a salad shop on the corner. I need help building a website for my future restaurant.</p>
                        <a href="project-salad.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-home"></i>Go Out Buddy</h4>
                    </div>
                    <div class="panel-body">
                        <p>Go out Buddy is a software application focusing on people trying to go to the same or adjacent final destination as the user <i><b>[...]</b></i> </p>
                        <a href="project-app.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-home"></i>Smart Windshield</h4>
                    </div>
                    <div class="panel-body">
                        <p>We have a heads up display windshield that projects your GPS on your windshield. We need more engineers on our team.</p>
                        <a href="project-tech.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->










 <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Providers
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Ken (Fanjia) Kong</h4>
                    </div>
                    <div class="panel-body">
                        <p>Hometown: Iceland</p>
                        <p>Skills: Training dogs; Build sculpture </p>
                        <p>Project Experience: App: How to Train Your Dog; Ice sculpture</p>
                        <a href="profile-ken.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Tara Raj</h4>
                    </div>
                    <div class="panel-body">
                        <p>Hometown: Oklahoma</p>
                        <p>Skills: Farming, Gambling </p>
                        <p>Project Experience: Whole Foods, App: Osage Casino</p>
                        <a href="profile-tara.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Kyle McGuire</h4>
                    </div>
                    <div class="panel-body">
                        <p>Hometown: Hawaii</p>
                        <p>Skills: Surfing, Fire throwing</p>
                        <p>Project Experience: None</p><br>
                        <a href="profile-kyle.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->











        <!-- Call to Action Section -->
        <br><br>
            <div class="well">
                <center> <p><h2>Where projects come from</h2></p>
                        <p>Every RoundRobin project comes from someone like you.  Anyone can be a provider.  Invest in your nest by using RoundRobin!</p>
                <br></center>

            </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; RoundRobin 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
