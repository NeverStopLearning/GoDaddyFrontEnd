<?php 
	
	$name = $_POST['name'];
	$from = $_POST['email'];
	$message = $_POST['message'];
	$subject="Received Mail From 'Contact Us page' : '$from' ";
	$to="expandinghorizonssi@gmail.com";
	
	//$headers="MIME-VERSION: 1.0" . "\r\n";
	//$headers .="Content-type:text/html;charset=UTF8" . "\r\n";
	//$headers .="From : $from \r\n ";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	//$headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .="From: <Contact_Us_Email: ".$from.">"."\r\n";
        
	if (isset($_POST['submit'])){

	$message = "Name: ". $name . " <br/><br/>Email: ". $from . " <br/><br/>Message: <br/>". $message;
	
		if(mail($to, $subject, $message, $headers)){
		     echo "Sent"; //to:" . $to ." subject: ". $subject. " message: " .$message. " headers: ".$headers ;
		}
		else{
		     echo "Failed";
		}
	}
	
?>


<!DOCTYPE html>

<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     
      <title>Matchmaking & Beyond</title>
	
	    <!-- Bootstrap -->
	   <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- <link href="lib/bootstrap4/css/bootstrap.min.css" rel="stylesheet"> --><!-- Think they made some changes or I must have been using key words incorrectly. row, main-nav, header,  -->
		

		 <!-- Font-awesome -->
	   <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<!-- My Stylesheet -->
		<link href="css/stylesheet.css" rel="stylesheet">
	
	    
  </head>
  <body>
    
  		<header>

  			<div class="row"> <!-- no css for row yet. set this up to be static when it gets to a certain hieght. This will be how the log and nav work on the page -->
  				<ul class="main-nav">
  					<li><a href="#">Home</a></li>
  					<li><a href="#">Event</a></li>
					<li><a href="#">Contact</a></li>
  				</ul>


  				<div class="logo">
  					<img src = "images/Background001.png">
  				</div>
  				

  			</div>
  			
  			<div class="welcome-msg">
          <h1>Matchmaking and Beyond</h1>

  				<!-- <h1>Welcome</h1>

  				<div class="welcome-btns">
  					<a href="#" class="btn btn-half">button 1</a>
  					<a href="#" class="btn btn-full">button 2</a>
  				</div> -->
  				
  			</div>

  		</header>


  		<section class="section section1">
  			
  			<h3 class="text-center">Section 1: Lorem Ipsum</h3>

  			<!-- <div class="ipsum"> -->
	  			<p class="ipsum">
	  				"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
	  			<br/>

	  				"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."
	  			</p>
<!-- 
	  			<br/>

	  			<p>
	  				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	  			</p>
	  		</div> -->

  			<div class="container">
  				<div class="row">
  					
  					<div class="col-md-3">
  						<i class="fa fa-certificate"></i>
  						<h4>Title 1</h4>
	  					<p class="arranging">
			  				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
			  			</p>
  					</div>

  					<div class="col-md-3">
  						<i class="fa fa-camera"></i>
  						<h4>Title 2</h4>
	  					<p class="arranging">
			  				 when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
			  			</p>
  					</div>

  					<div class="col-md-3">
  						<i class="fa fa-envelope"></i>
  						<h4>Title 3</h4>
	  					<p class="arranging">
			  				 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
			  			</p>
  					</div>

  					<div class="col-md-3">
  						<i class="fa fa-cog"></i>
  						<h4>Title 4</h4>
	  					<p class="arranging">
			  				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			  			</p>
  					</div>

  				</div>

	  		</div>
	  		
  		</section>


  		<section class="section section2">
  			<ul class="section2-showcase clearfix">
  				<li>
  					<figure class="section2-photo"> <!-- Look into this tag -->
  						<img src="images\comingsoonbackground.png">
  					</figure>
  				</li>
  				
  				<li>
  					<figure class="section2-photo"> <!-- Look into this tag -->
  						<img src="images\comingsoonbackground.png">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> <!-- Look into this tag -->
  						<img src="images\comingsoonbackground.png">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> <!-- Look into this tag -->
  						<img src="images\comingsoonbackground.png">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> <!-- Look into this tag -->
  						<img src="images\ipImg1.jpeg">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> <!-- Look into this tag -->
  						<img src="images\ipImg1.jpeg">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> <!-- Look into this tag -->
  						<img src="images\ipImg1.jpeg">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> <!-- Look into this tag -->
  						<img src="images\ipImg1.jpeg">
  					</figure>
  				</li>

  				<!-- Below is an alternating pattern. aspect ratio is off so it's not aligned well. -->
				<!-- <li>
  					<figure class="section2-photo"> 
  						<img src="images\comingsoonbackground.png">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> 
  						<img src="images\ipImg1.jpeg">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> 
  						<img src="images\comingsoonbackground.png">
  					</figure>
  				</li>

  				<li>
  					<figure class="section2-photo"> 
  						<img src="images\ipImg1.jpeg">
  					</figure>
  				</li> -->

  			</ul>
  			

  		</section>


<!-- 
  		<section class="section section3">
  			<h3 class="text-center">Section 3: How it works 1, 2, 3</h3>

  			<div class="container">
  				<div class="row">
  					<div class="col-md-6">
  						<div class="section3-photo">
	  						<img src="images/phone1.jpg">
	  					</div>
  					</div>

  					<div class="col-md-6">
  						<div class="section3-steps">

  							<div>
	  							<div>1</div>
	  							<p>
	  								Test text to test text. 

	  							</p>
  							</div>

  							<div>
	  							<div>2</div>
	  							<p>
	  								Test text to test text. 

	  							</p>
  							</div>

  							<div>
	  							<div>3</div>
	  							<p>
	  								Test text to test text. 

	  							</p>
  							</div>

  							<div class="section3-btns">
  								<a href="#" class="downloadBtn1"> <img src="images/downloadBtn1.png"></a>
  								<a href="#" class="downloadBtn2"> <img src="images/downloadBtn2.png"></a>
  							</div>

  						</div>
  					</div>

  				</div>

  			</div>

  		</section>
 -->
<!-- 
  		<section class="section section4">
			<h3 class="text-center">Section 4: Current Destinations</h3> 

			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="images/ipImg5.jpg">
						<h4> Place 1 </h4>
						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

					</div>

					<div class="col-md-3">
						<img src="images/ipImg5.jpg">
						<h4> Place  </h4>
						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

					</div>

					<div class="col-md-3">
						<img src="images/ipImg5.jpg">
						<h4> Place 3 </h4>
						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

					</div>

					<div class="col-md-3">
						<img src="images/ipImg5.jpg">
						<h4> Place 4 </h4>
						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

						<p>
							<i class="fa fa-cog"></i> Intro Title 
						</p>

					</div>

				</div>

			</div> 			

  		</section>
 -->

      <section class="section section5">
        <h3 class="text-center">Section 5: Testimonials</h3>

        <div class="container">
          <div class="row">
              <div class="col-md-4">
                <!-- <blockquote> --> <!-- what are these used for -->
                  <p>
                    ya ya yadda yadda yda yaaaada. ya ya yadda yadda  ya ya yadda yadda yda yaaaada.
                    ya ya yadda yadda yda yaaaya ya yadda yadda yda yaaaada. ya ya yadda yadda ya ya 
                    yadda yadda yda yaaaada.ya ya yadda yadda yda yaaaada. ya ya yadda yadda  ya ya 
                    yadda yadda yda yaaaada.
                  </p>
                  <cite><img src="images/comingsoonbackground.png"> Add Comment</cite> <!-- what are 'cite' tags used for -->
                <!-- </blockquote> -->

              </div>

              <div class="col-md-4">
                <!-- <blockquote> -->
                  <p>
                    ya ya yadda yadda yda yaaaada. ya ya yadda yadda  ya ya yadda yadda yda yaaaada.
                    ya ya yadda yadda yda yaaaya ya yadda yadda yda yaaaada. ya ya yadda yadda ya ya 
                    yadda yadda yda yaaaada.ya ya yadda yadda yda yaaaada. ya ya yadda yadda  ya ya 
                    yadda yadda yda yaaaada.
                  </p>
                 <cite><img src="images/comingsoonbackground.png"> Add Comment</cite>
                <!-- </blockquote> -->

              </div>

              <div class="col-md-4">
                <!-- <blockquote> -->
                  <p>
                    ya ya yadda yadda yda yaaaada. ya ya yadda yadda  ya ya yadda yadda yda yaaaada.
                    ya ya yadda yadda yda yaaaya ya yadda yadda yda yaaaada. ya ya yadda yadda ya ya 
                    yadda yadda yda yaaaada.ya ya yadda yadda yda yaaaada. ya ya yadda yadda  ya ya 
                    yadda yadda yda yaaaada.
                  </p>
                  <cite><img src="images/comingsoonbackground.png"> Add Comment</cite>
                <!-- </blockquote> -->

              </div>


          </div>          
        </div>
        

      </section>



      <section class="section section6">
        <div class="container">
          <h3 class="text-center">Section 6: Form</h3>
        </div>

        <div class="row gap">
          <div class="col-md-4">
            <input type="text" placeholder="Enter Name" id="name" name="name" class="form-control"> <br>
            <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control"> <br>
            <input type="password" placeholder="Password" class="form-control"> <br>

          </div>

          <div class="col-md-8">
            <textarea class="form-control" rows="8" id="message" name="message" placeholder="Comment"></textarea>

            <input type="submit" name="submit" class="btn btn-warning btn-block" value="send"></input>
            <!-- <button class="btn btn-warning btn-block">Submit</button> -->
          </div>

        </div>



      </section>

      <footer class="footer">
        

      </footer>




  
  </body>
</html>