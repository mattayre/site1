<!DOCTYPE html>
<html lang="en">

<head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wedding Planner xxx</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--fix fa to folder-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/myoverride-bootstrap.css" rel="stylesheet">
    <link href="css/mysite.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" charset="utf-8" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" charset="utf-8" href="css/myoverride-slick.css"/>
</head>

<body>
  <div class="container"style="border:solid 1px lightgrey">
    <div class="sectionheading">
      <div class="logo"style="width:140px;margin-left:auto;
      margin-right:auto">
      <img src="images/logo2.jpg">
      
      </div>  
    </div>
    <div class="section2" >
    <!-- Navigation -->
    <header class="navbar-inverse" role="banner">
         <div class="icons">
          <a href="index.html"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="index.html"><i class="fa fa-linkedin fa-2x"></i></a>
          <a href="index.html"><i class="fa fa-envelope fa-2x"></i></a>
          <a href="index.html"><i class="fa fa-facebook-square fa-2x"></i></a>
        </div>
      <nav role="navigation"> 
        
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>  
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="aboutus.html">ABOUT</a></li>
            <li><a href="realism.html">GETTING STARTED</a></li>
            <li><a href="dvd.html">RECEPTION</a></li>
            <li><a href="courses.html">THE DRESS</a></li>
            <li><a href="courses.html">THE WEDDING</a></li>
            <br>
            <br>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    </header>
    <!-- Full Page Image Background Carousel Header -->
  </div>
  <div class="section3">  
    <!-- Page Content --> 
    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'mattayre7@gmail.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
      }
      }
    ?>

    <div class="row">
    <form class="form-horizontal" role="form" method="post" action="contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example123@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
    </form> 
 
    </div>
    <hr>
    <div class="row">
      
    </div> 
    
      <hr>     
    <div class="row">
        
    </div>
    <div class="row">
      
    </div>

    <div class="row">
      
    </div>
    
    <hr>
    <div class="row">
        
      <div class="col-sm-12 section3colc">
         <h1><i class="fa fa-quote-left fa-1x"></i>A Fantistic Wedding Planner Service<i class="fa fa-quote-right fa-1x"></i></h1>
      </div>
    </div>

                                
    <!--slider carousel goes here-->
    
    <!--slider carousel goes above here-->
    <hr>
    <div class="row">
       <div class="icons2">
        <a href="index.html"><i class="fa fa-twitter-square fa-1x"></i></a>
        <a href="index.html"><i class="fa fa-facebook fa-1x"></i></a>
        <a href="index.html"><i class="fa fa-linkedin fa-1x"></i></a>
        <a href="index.html"><i class="fa fa-envelope fa-1x"></i></a>
      </div>
    </div>
    <br>
    <!--footer-->
    <div class="row footer">
      <div class="col-sm-3 section3cold">
         <br><br><br>
        Who we are
        <br>
        <br>
        What we offer
        <br>
        <br>
        How to contact
        <br>
        <br>
        Who we are
        <br>
        <br>
        What we offer
        <br>
        <br>
        How to contact
        <br><br><br><br><br><br><br>
      </div>
      <div class="col-sm-3 section3cold">
        <br><br><br>
        Who we are
        <br>
        <br>
        What we offer
        <br>
        <br>
        How to contact
        <br>
        <br>
        Who we are
        <br>
        <br>
        What we offer
        <br>
        <br>
        How to contact
        <br><br><br><br><br><br><br>
      </div>
      <div class="col-sm-3 section3cold">
        <br><br><br>
        Who we are
        <br>
        <br>
        What we offer
        <br>
        <br>
        How to contact
        <br>
        <br>
        Who we are
        <br>
        <br>
        What we offer
        <br>
        <br>
        How to contact
        <br><br><br><br>
      </div>
      <div class="col-sm-3 section3cold">
        <br><br><br>
        who we are
        <br>
        <br>
        What we offer
        <br>
        <br>
        How to contact
        <br>
        <br>
        Who we are
        <br>
        <br>
        What we offer
        <br>
        <br>
        How to contact
        <br><br><br>
        <div class="copyright">
        <p style="color:grey">&copy Wedding Planner 2015</p>
        <br>
        <a href="index.html"> 
        <p style="color:grey">Web Development by Matt Ayre </p>
        </a>
        </div>
      </div>
    </div>     
  </div>
<!--Footer ends -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval:3000//changes the speed
    })
    </script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
    $('.responsive').slick({
    dots: true,
    autoplay: true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    variableWidth: true,
  
    });    });
    </script>
</div>
</body>

</html>
