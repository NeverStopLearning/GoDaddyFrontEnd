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

    <title>Matchmaking & Beyond</title>

  </head>
  <body>
    

	
	
	
						<form action="" method="post">
                                                    <input id="name" name="name" type="text" placeholder="Enter Name" ></input>
						    <input id="email" name="email" type="text" placeholder="Enter Email" ></input>
					            <textarea id="message" name="message" type="text" placeholder="Enter Message" ></textarea >
						     <!--button type="submit" name="submit" class="btn btn-primary" >Send</button-->
						     <input type="submit" name="submit" value="send"></input>
									
					
								

						</form>						
		

  
  </body>
</html>