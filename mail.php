<?php
		if(isset($_POST['submit'])){
			$name=$_POST['name '] ; 
			$email=$_POST['email '] ; 
			
			$to='bhavyee78@gmail.com' ; 
			$subject='form submission' ; 
			$message = "name : ".$name ; 
			$headers="from: " .$email ; 
			
			if(mail($to , $subject , $message , $header)) {
				
				echo "<h1> sent successfully ! thankyou " . " "  . $name ;
			}
			else 
			{
				echo "something went wrong" ; 
				
			}
		}



>