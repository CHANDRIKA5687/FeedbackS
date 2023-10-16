<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Web Based feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>" type="text/css" rel="stylesheet" /> 
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
   

    <!-- Custom CSS -->
    

   

</head>
<body>
    <header>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
        <header style="text-align: center;max-width: 100%;">
		<img src="<?php echo base_url('assets/images/header.png');?>" alt="" style="max-width: 100%;">  		
	</header>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Web Based feedback System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
						
                    <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="<?php echo base_url('login');?>"><i class="fa fa-home fa-fw"></i>Login</a>
                    </li>
	<!-- <li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="login">Admin</a></li> 
        </ul>
      </li> 		 -->
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

				
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide" style="height:670px;max-width:100%">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="">
                    <img src="<?php echo base_url('assets/images/feedback1.jpg');?>" alt="" style="height:670px;width:100%;max-width:100%">
                </div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" >
                <img src="<?php echo base_url('assets/images/feedback1.jpg');?>" alt="" style="height:670px;width:100%;max-width:100%">
            </div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			      <div class="item">
                <div class="fill" >
                <img src="<?php echo base_url('assets/images/feedback3.jpg');?>" alt="" style="height:670px;width:100%;max-width:100%">
                </div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        
        
                    </header> 
                    
<!-- slider -->			
<div class="m1" style="margin-top:20px;background-color:purple;margin-left:-50;">
        <marquee direction="left" style="color:white;font-size:20px;font-width:10px;"><strong>For Second Year Feedback is Opened and This is Closed on  22/10/2022<strong></marquee>
        </div>
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

            </div>
            
    </div>
    <!-- /.container -->
	
	
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/css/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/css/bootstrap.min.js');?>"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
