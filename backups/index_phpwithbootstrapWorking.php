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
		
		<!-- I Added -->
		<link href="css/stylesheet.css" rel="stylesheet">
	
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
  </head>
  <body>
    

    <div> <!-- first div -->
	 
	<div class="container"> 
	
	    <div class = "row">
		<div class = "col-md-9 col-md-offset-3 " style="background-color:red;">
			<div class = "well well-sm">
				<form class="form-horizontal" action="" method="post">
					<fieldset>
						<legend class="glyphicon glyphicon-envelope text-center"> contact </legend>
	    
						<div class="form-group">
							<label class="col-md-3 control-label" for="name" > Name </label>
							<div class="col-md-9">
	            						<input id="name" name="name" type="text" placeholder="Enter Name" ></input>
							 </div>
						</div>
		    
	    					<div class="form-group">
							<label class="col-md-3 control-label" for="email" > Email </label>
							<div class="col-md-9">
		    						<input id="email" name="email" type="text" placeholder="Enter Email" ></input>
					            	</div>
						</div>
	            
	            
	     					<div class="form-group">
							<label class="col-md-3 control-label" for="message" > Message </label>
							<div class="col-md-9">       
	            						<textarea id="message" name="message" type="text" placeholder="Enter Message" ></textarea >
					            	</div>
						</div>
	            
	       					<div class="form-group">
							<div class="col-md-12 text-right">     
								<!--button type="submit" name="submit" class="btn btn-primary" >Send</button-->
								<input type="submit" name="submit" value="send"></input>
							</div>
						 </div>	
						
					</fieldset>
				</form>						
	                    
	                    </div>
			</div>				
		   </div>			
		</div>
    </div> <!-- first/last div -->
  
  </body>
</html>