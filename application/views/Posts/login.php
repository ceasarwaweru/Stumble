<!doctype html>
<html lang="en">
  <head>

    


    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/css/jquery.timepicker.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Reg/css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">Stumble</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
             <!--  <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="services.html">Plumbing</a>
                  <a class="dropdown-item" href="services.html">Electricians</a>
                  <a class="dropdown-item" href="services.html">General Cleaning</a>
                                 </div>

              </li> -->
              
             
             <!--  <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul> -->
            <ul class="navbar-nav ml-auto cta-btn">
              <li class="nav-item">
                <a class="nav-link" href="get-quote.html">
                  Log In <br> 
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
<section></section>
    <section class="home-slider owl-carousel">
   
</section>



    <!-- END section -->
           
    <section class="section">
      <div class="container">

    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>

                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php 
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>

                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('Post/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="Email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                        </fieldset>
                    </form>
                <center><b>Not registered ?</b> <br></b><a href="<?php echo base_url('post/index_user'); ?>">Register here</a></center><!--for centered text-->

                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    <!-- END section -->

    <!-- <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">Recent Works</h2>
            <p class="mb-3 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            <p><a href="works.html" class="btn btn-primary">View All Works</a></p>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-8  d-4 element-animate">
            <a href="works-single.html" class="link-thumbnail">
              <h3>Wood Polishing</h3>
              <span class="ion-plus icon"></span>
              <img src="img/work_thumb_1.jpg" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="works-single.html" class="link-thumbnail">
              <h3>General Construction Building</h3>
              <span class="ion-plus icon"></span>
              <img src="img/work_thumb_2.jpg" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="works-single.html" class="link-thumbnail">
              <h3>House Renovation</h3>
              <span class="ion-plus icon"></span>
              <img src="img/work_thumb_3.jpg" alt="Image placeholder" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section> -->
    <!-- END section -->
  
          <!-- END slider -->
        </div>
      </div>
    </section>
    <!-- END section -->
    
    
  
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row">
          
           
        
          <div class="col-md-3">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div></div>
          <div class="col-md-3">
            <h3>Social</h3>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="<?php echo base_url();?>assets/Reg/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/Reg/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/Reg/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/Reg/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/Reg/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/Reg/js/main.js"></script>
  </body>
</html>