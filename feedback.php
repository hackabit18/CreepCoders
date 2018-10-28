
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
   <link rel="stylesheet"  href="main2.css">  

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
	
<!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Feedback</h5>
   			<h1>We'd Love To Hear From You.</h1>


   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   
	</section> <!-- /contact -->
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





</div> <!-- /contact-info -->
</body>
</html>