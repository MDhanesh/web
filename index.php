
<?php include 'sendemail.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>INEXON-a development company</title>
    <link rel="stylesheet" href="css/styles.css">
    <!------------------------------BOOTSTRAP LINK--------------------------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!------------------------------BOOTSTRAP LINK--------------------------------------->
    <!-----------------------------fontawesome------------------------->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<!--------------------------------fontawesome---------------------->
     <!-------------------------------animate.css------------------------------->
     <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!--------------------------animate.css------------------------------>
</head>
<body>
    <!------------------------------navbar--------------------------------------->
       <header class="head">
           <nav class="navbar navbar-expand-lg text-center navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#">INEXON</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto">
                       <li class="nav-item ">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                       </li>
                       <li class="nav-item">
                            <a class="nav-link" href="#about">about</a>
                       </li>
                       <li class="nav-item">
                            <a class="nav-link" href="#services">services</a>
                       </li>
                       <li class="nav-item">
                            <a class="nav-link" href="#">testimonials</a>
                       </li>
                       <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                       </li>
                   </ul>
               </div>   
           </nav>
       </header>
    <!------------------------------navbar--------------------------------------->
    <!-------------------------------carousel------------------------------------>
       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner ">
               <div class="carousel-item active">
                    <img class="d-block " src="img/33.jpg" alt="First slide" style="opacity: 0.5">
                   <div class="carousel-caption">
                       <div class="row image">
                           <div class="col-md-12 col-lg-12 ">
                               <!-- <img src="img/slide3.png" alt=""width="398" height="311"  >	  
                           </div>
                           <div class=" col-lg-6">    --> 			
                             <h2 class="text-light inexon animate__animated animate__fadeInUp animate__delay-1s" >INEXON TECHNOLOGIES</h2> 
                            
                           </div>
                       </div>
                   </div>
               </div>
               <div class="carousel-item">
                   <img class="d-block" src="img/12.jpg" alt="Second slide" style="opacity: 0.5">
                       <div class="carousel-caption">
                           <div class="row  image">
                               <div class="col-md-12 col-lg-12">
                                    <!--<img src="img/soft1.jpg" alt="" width="398" height="311" >	 
                               </div>
                               <div class=" col-lg-6">-->	
                                    <h2 class="text-light inexon animate__animated animate__fadeInUp animate__delay-1s">INEXON  TECHNOLOGIES</h2>
                               </div>
                           </div>
                       </div>
               </div>
               <div class="carousel-item">
                   <img class="d-block" src="img/seo.jpg" alt="Third slide" style="opacity: 0.5">
                       <div class="carousel-caption">
                           <div class="row  image">
                               <div class="col-md-12 col-lg-12">
                                   <!-- <img src="img/mark.jpg" alt="" width="398" height="311" >	 
                               </div>
                               <div class=" col-lg-6">--> 
                                     <h2 class="text-light  inexon animate__animated animate__fadeInUp animate__delay-1s" >INEXON TECHNOLOGIES </h2>
                               </div>
                           </div>
                       </div>
               </div>
           </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                </a>
       </div>
   <!--------------------------------------------carousel---------------------------------->

   <!--------------------------------about section----------------------------------------->
  
       <div class="container text-light" id="about">
   	       <div class="text-center about ">
   			  <h1>About Us</h1><hr class="line">	<div class="spacer-single"></div>
			  <h5>  <b> INEXON TECHNOLOGIES</b>  has been delivering software development and related IT services. We combine proven methodologies, business domain knowledge and technology expertise of  skilled software professionals to deliver high quality solutions.</h5>
	       </div>
       </div>
       <div class="container text-light about2">
           <div class="row text-center">
         	   <div class="col-lg-4 col-md-6">
   		            <h3>Web Development</h3><hr class="line">	<div class="spacer-single"></div>
   		            <p>Productive &amp; engaging web solutions for smarter work and improved customer service.</p>
       	       </div>
           	   <div class="col-lg-4 col-md-6">
   		           <h3>Software Development</h3><hr class="line">	<div class="spacer-single"></div>
   		            <p>Sophisticated enterprise apps to streamline your business process, workflows and communication.</p>
           	   </div>
               <div class="col-lg-4 ">
   		         <h3>Marketing</h3><hr class="line">	<div class="spacer-single"></div>
   		         <p>To be the most preferred provider of superior business process outsourcing services to help transform and enhance our customers' business.</p>
   	           </div>  	
           </div>
       </div>

   <!---------------------------------------about section---------------------------------->


    <!--------------------------------------parallax-------------------------------------->
    <style>
        .parallax{
	background-image: url('img/5.jpg');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 500px;
    padding: 200px 0px;
}
    </style>
    <div class="parallax" >
	   <div class="text-center text-light">
    		<h2>Need  a website To <br> Improve your Bussiness?</h2>
		    <h3>we are HERE!</h3>
       </div>
   </div>
   <!-------------------------------parallax----------------------------------->


 <!--------------------------------services section----------------------------
   <div class="container-fluid text-center  bg-light padding" id="service">
            <h2> <a href="service.php" style="text-decoration: none;color: #000"> OUR SERVICES</a></h2>
            <hr class="line">
       <div class="row font ">
           <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="services">
                    <h5 class="card-title text-uppercase "><a href="service.php" style="text-decoration: none;color: #000">Web developer</a></h5>
                   <div class="sevices-img text-center ">
                        <img src="img/a.jpg" alt="" style="width: 200px">
                   </div>
                   <div class="card-body text-center">
                        <h5><br>
                        <a href="service.php" style="text-decoration: none;color: #000">1.Website Development.</a><br><br>
                        <a href="service.php" style="text-decoration: none;color: #000">  2.Software Development.</a>
                        </h5>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="services">
                    <h5 class="card-title text-uppercase "><a href="service.php" style="text-decoration: none;color: #000">Web developer</a></h5>
                    <div class="sevices-img text-center ">
                        <img src="img/a.jpg" alt="" style="width: 200px">
                    </div>
                   <div class="card-body text-center">
                      <h5><br>
                      <a href="service.php" style="text-decoration: none;color: #000">   1.Internet Digital Marketing.</a> <br><br>
                      <a href="service.php" style="text-decoration: none;color: #000"> 2.Digital Branding.</a>
                        </h5>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="services">
                    <h5 class="card-title text-uppercase "><a href="service.php" style="text-decoration: none;color: #000">Web developer</a></h5>
                    <div class="sevices-img text-center ">
                        <img src="img/a.jpg" alt="" style="width: 200px">
                    </div>
                    <div class="card-body text-center">
                        <h5><br>
                        <a href="service.php" style="text-decoration: none;color: #000"> 1.Video Conferencing Systems.  </a><br><br>
                        <a href="service.php" style="text-decoration: none;color: #000"> 2.Projection Mapping .</a>
                        </h5>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="services">
                    <h5 class="card-title text-uppercase "><a href="service.php" style="text-decoration: none;color: #000">Web developer</a></h5>
                    <div class="sevices-img text-center ">
                        <img src="img/a.jpg" alt="" style="width: 200px">
                    </div>
                    <div class="card-body text-center">
                        <h5><br>
                        <a href="service.php" style="text-decoration: none;color: #000">  1.Hologram Projection.. </a><br><br>
                        <a href="service.php" style="text-decoration: none;color: #000"> 2.IOT System.</a>
                        </h5>
                  </div>
               </div>
           </div>     
       </div>
   </div>
   <!---------------------------services section-------------------------->

<!------------------services section----------------------------->
<style>
  .nav{
    justify-content: center;
  }
  .nav li{
    padding: 1rem 3rem;
  
  }
  .nav li a{
    color:white;
    text-decoration: none;
  }
  .nav li a:hover{
    color: red;
  }
  .right{
    top: 50%;
  }
  .right h5{
    text-align:center;
    margin: 5% 0;
    font-size: 40px;
  }
  .right p{
    text-align: ;
    width: 30%;
    margin: 100px 0px;
    position:absolute;
  }
  .left img{
    margin-left: 60%;
  
  }
  @media(max-width: 768px){
    .right p{
      
    }
    .left img{
      width: 300px ;
      height: 300px;
      margin-left: 45%;
    }
  }
  @media(max-width:576px){
    .left img{
     margin-top: 70%;
     width: 250px;
     float: none;
     margin-left: 0;
    }
    .right p{
      width: 70%;
      margin-top: 0%;
 
    }
  }
</style>
<div class="pt-5">
</div>
<section  >

    <div class="shell">
      <div class="range offset-lg-top--35">
      <h2 class="text-center "  id="services"> <a href="service.php" style="text-decoration: none;color: #fff"> OUR SERVICES</a></h2><hr class="line">
        <div class="cell-lg-12">
          <div id="tab-2" class=" ">
            <ul class="nav">
              <li class="active"><a href="#tab-2-1" data-toggle="tab" aria-expanded="true"><span>
                    <span >DEVELOPMENT</span></span></a></li>
              <li class=""><a href="#tab-2-2" data-toggle="tab" aria-expanded="false"><span>
                 
                    <span >MARKETING</span></span></a></li>
              <li class=""><a href="#tab-2-3" data-toggle="tab" aria-expanded="false"><span>
                    
                    <span>IOT</span></span></a></li>
              <li class=""><a href="#tab-2-4" data-toggle="tab" aria-expanded="false"><span>
                    
                    <span >OTHERS</span></span></a></li>
            </ul>
            <div class="tab-content container text-light">
              <div id="tab-2-1" class="tab-pane fade show active ">
                <div class="tab-content-inner">
                  <div>
                    <div class="right">
                      <h5>Developmemt</h5>
                      <p>INEXON Solutions is an early technology innovation company that uses the latest and best technology like Blockchain, Artificial Intelligence, IoT and the like to provide your Business with the latest and apt solutions.</p>
                      </div>
                  </div>
                  <div class="offset-top-30 left">
                    <figure class="image-wrap-default"><img src="img/soft.jpg" width="398" height="311" alt="" class="img-responsive"></figure>
                  </div>
                </div>
              </div>
              <div id="tab-2-2" class="tab-pane fade">
                <div class="tab-content-inner">
                  <div>
                    <div  class="right">
                      <h5>MARKETING</h5>
                      <p>INEXON  provides your Business’s with marketing solutions that ensures that you get the same quality of work even after repeat orders.Inexon helps you to improve your bussiness.</p>
                   </div>
                  </div>
                  <div class="offset-top-30 left">
                    <figure class="image-wrap-default"><img src="img/mark1.jpg" width="398" height="311" alt="" class="img-responsive"></figure>
                  </div>
                </div>
              </div>
              <div id="tab-2-3" class="tab-pane fade">
                <div class="tab-content-inner">
                  <div>
                    <div  class="right">
                      <h5>IOT</h5>
                      <p>INEXON Systems is concentrating on Graphene based solutions that will power IoT based products which can range from mobility devices to products that connect OBD ports in automobiles.</p>
                     </div>
                  </div>
                  <div class="offset-top-30 left">
                    <figure class="image-wrap-default"><img src="img/iot2.jpg" width="398" height="311" alt="" class="img-responsive"></figure>
                  </div>
                </div>
              </div>
              <div id="tab-2-4" class="tab-pane fade">
                <div class="tab-content-inner">
                  <div>
                    <div  class="right">
                      <h5>OTHERS</h5>
                      <p>INEXON  technologies has an vraious solution field like... <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. VIDEO Conferencing <br>2. Projection system</p>
                     </div>
                  </div>
                  <div class="offset-top-30 left">
                    <figure class="image-wrap-default"><img src="img/soft1.jpg" width="398" height="311" alt="" class="img-responsive"></figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!------------------services section---------------------->


   <!------------------------progress bar----------------------------------->

      
   	<div class="container text-light padding ">
   		<h1 class="text-center font">OUR SPECIALITY</h1><hr class="line">

   		<div class="spacer-single"></div>
   		<div class="row uppercontent">
   			<div class="col-md-6 text-left">
   				<h3>24/7 Working Hours</h3>
   				<div class="progress" style="height: 5px;background-color: #000;">
                    <div class="progress-bar animate__animated animate__fadeInLeft" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               
   			</div>
   			<div class="col-md-6 text-left ">
   				<h3>Quality Assurance</h3>
   				<div class="progress" style="height: 5px;background-color: #000;">
                    <div class="progress-bar animate__animated animate__fadeInLeft" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
   			</div>
   			<div class="spacer-single"></div>
   			<div class="col-md-6 text-left">
   				<h3>Accurancy</h3>
   				<div class="progress" style="height: 5px;background-color: #000;">
                    <div class="progress-bar animate__animated animate__fadeInLeft " role="progressbar" style="width: 97%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
   			</div>
   			<div class="col-md-6 text-left">
   				<h3>Data Delivery timing</h3>
   				<div class="progress" style="height: 5px;background-color: #000;">
                    <div class="progress-bar animate__animated animate__fadeInLeft" role="progressbar" style="width:96%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
   			</div>
   			<div class="spacer-single"></div>
   			<div class="col-md-6 text-left">
   				<h3>Monitoring</h3>
   				<div class="progress" style="height: 5px;background-color: #000;">
                    <div class="progress-bar animate__animated animate__fadeInLeft" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
   			</div>
   			<div class="col-md-6 text-left">
   				<h3>Research &amp; Management</h3>
   				<div class="progress" style="height: 5px;background-color: #000;">
                    <div class="progress-bar animate__animated animate__fadeInLeft" role="progressbar" style="width: 96%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
   			</div>
   			
   		</div>
   	
   </div>
   <!--------------------------------progress bar-------------------------------->

   <!------------------------------------------contact---------------------------->


   <!---------------------alert messages start------------------------->
          <?php echo $alert; ?>
    <!--------------------alert messages end------------>

    <!-----------------------contact section start------------------------>
   <section>
   
		<div class="container-fluid text-light" id="contact">
			<h1 class="text-center">CONTACT</h1><hr class="line">
			<div class="spacer-single"></div>
			<div class="row">
        <div class="col-lg-2"></div>
			   <div class="col-lg-4 position relative">
				   <div class="section__header">
					   <h2 class="push-left"><span class="extra-light">Say <b>Hello</b> to Me!</span></h2>
				   </div>	
				   <div class="">
					   <form action=""  method="post">
						   <div class="form-group">
							   <input type="text" name="name" class="form-control " placeholder="Full Name" required="">
						   </div>
						   <div class="form-group">
							   <div class="row">
								   <div class=" col-lg-6">
									   <input type="tel" class="form-control" name="number" placeholder="Phone Number" required>
								   </div>
								   <div class=" col-lg-6">
									    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
								   </div>
							   </div>
						   </div>
						   <div class="form-group">
							    <textarea class="form-control" rows="6" placeholder="Your Message" name="message"></textarea>
					       </div>
					       <div class="">
					    	   <input type="submit" name="submit" class="btn btn-lg btn-outline-warning" value="Send mail">
					       </div>		
					   </form>
				   </div>
			   </div>
			   <div class="col-lg-3 col-md-12 content" >
          <h3 class="text-center">INDIA</h3><hr class="line">
			   	<address>
			   		<span> <h4><a href="https://goo.gl/maps/skipXYEnwC7Jjqjq9" title=""><i class="fas fa-map-marker "></i>&nbsp;2nd Floor, Thottumugham Building,
                                                    Near Technopark Phase III,Mukkolackal JN,
                                                    Kazhakuttom, Trivandrun, Kerala 695582</a></h4></span>
			   	</address>
			   	<span><h5><a href="tel:9645594555" title=""><i class="fas fa-phone-alt"></i> &nbsp;Call us:9645594555</a></h5></span>
			   	<span><h5><i class="fas fa-envelope "></i>&nbsp;&nbsp;&nbsp;abcd@!23.com</h5></span>
            <span><h5><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;&nbsp;abcd@!23.com</h5></span>
              <span><h5><i class="fab fa-twitter"></i>&nbsp;&nbsp;&nbsp;abcd@!23.com</h5></span>
              <span><h5><i class="fab fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;abcd@!23.com</h5></span>
			   </div>
          <div class="col-lg-3 col-md-12 content" >
            <h3 class="text-center">USA</h3><hr class="line">
          <address>
            <span> <h4><a href="https://goo.gl/maps/skipXYEnwC7Jjqjq9" title=""><i class="fas fa-map-marker "></i>&nbsp;260-68 75th Ave,
                                                    Glen Oaks, 1104
                                                    Newyork.</a></h4></span>
          </address>
          <span><h5><a href="tel:5165600791" title=""><i class="fas fa-phone-alt"></i> &nbsp;Call us:5165600791</a></h5></span>
          <span><h5><i class="fas fa-envelope "></i>&nbsp;&nbsp;&nbsp;abcd@!23.com</h5></span>
            <span><h5><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;&nbsp;abcd@!23.com</h5></span>
              <span><h5><i class="fab fa-twitter"></i>&nbsp;&nbsp;&nbsp;abcd@!23.com</h5></span>
              <span><h5><i class="fab fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;abcd@!23.com</h5></span>
         </div>
		   </div>
	   </div>
   </section>
   <div class="spacer-single"></div>
 <!---------------------------------contact------------------------>


 <!--------------------------------------footer--------------------------->
 <footer>
		<div class="container-fluid text-center bg-dark ">
			<div class="row">
				<div class="col-md-12 text-light">
					<div class="spacer-single"></div>
				<p>&copy;<b>INEXON</b> Ltd.Copyright 2020</p>
				</div>
				
			</div>

			
		</div>
	</footer>
<!---------------------------------footer------------------------------->



<!---------------------------------script ------------------------------->

   <script type="text/javascript">
       if(window.history.replaceState){
           window.history.replaceState(null, null, window.location.href);
         }
   </script>
    <!------------------------------BOOTSTRAP LINK--------------------------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!------------------------------BOOTSTRAP LINK--------------------------------------->
</body>
</html>