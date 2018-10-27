<?php
session_start();
if(isset($_SESSION['id'])){
	header("location: setup/user.php");
}

?>


<!----><!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>PickUp</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">   
   <link rel="stylesheet" href="main2.css">  

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->


</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <div class="navbarClass">
        <h3><a href="#">PICKUP</a></h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="feedback">Feedback</a></li>
            <li class="floatRight1"><a href="login.php">Log In</a></li>
            <li class="floatRight"><a href="signup.php">Sign Up</a></li>
        </ul>
    </div>
	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

  <div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h3>PICKUP</h3>
	   			

	   			<p class="intro-position">
	   				<span>YOUR GADGET SECURITY PARTNER</span>
	
	   			</p>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   <!-- 	<ul class="intro-social">        
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul> --> <!-- /intro-social -->      	

   </section> <!-- /intro -->

	
	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Technology</h5>
   			<h1>What Can We Do For You?</h1>

   			<p class="lead">Concerned about vehicle theft at unknown places? Well, we will guard it for you</p>

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	<div class="service">	

	      		<span class="icon"><i class="icon-user"></i></span>            

	            <div class="service-content">	

	            	 <h3>FaceRecognition</h3>

		            <p class="desc">Use of facial recognition id to access any vehicle.Login through face detection and face comparison.
	         		</p>
	         		
	         	</div> 	         	 

				</div> <!-- /service -->

				<div class="service">	

					<span class="icon"><i class="icon-key"></i></span>                          

	            <div class="service-content">	

	            	<h3>UniqueProductKey</h3>  

		            <p class="desc">The user will be provided with an appplication where he can choose to login either through email or facial recognition.The unique product ID provided will only be known to the owner ensuring privacy and security. 
	         		</p>

	            </div>	                          

			   </div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-id"></i></span>		            

	            <div class="service-content">

	            	<h3>Mutiple IDs</h3>

		            <p class="desc">
	        			</p> 

	            </div> 	            	               

			   </div> <!-- /service -->

			
	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section> <!-- /services -->	
	<div class="row contact-info">

		<div class="col-four tab-full">

			<div class="icon">
				<i class="icon-pin"></i>
			</div>

			<h5>Where to find us</h5>

			<p>
		 BIT Extension, lalpur<br>
		 Ranchi<br>
		 834001
		 </p>

		</div>

		<div class="col-four tab-full collapse">

			<div class="icon">
				<i class="icon-mail"></i>
			</div>

			<h5>Email Us At</h5>

			<p>someone@kardswebsite.com<br>
					     
			</p>

		</div>

		<div class="col-four tab-full">

			<div class="icon">
				<i class="icon-phone"></i>
			</div>

			<h5>Call Us At</h5>

			<p>
				Mobile: (+91) 7858959404<br>
				  
			</p>

		</div>
		
	</div> <!-- /contact-info -->
	 

   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright PickUp</span> 
		        	<span>Design by CreepCoders</span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

   
</body>

</html>