<?php 

	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$mail=$_POST['email'];
		$phone=$_POST['phone'];
		$title=$_POST['message'];

		$to= 'shubhamdhore16@gmail.com';
		$subject='For project enquiries';
		$message="name: ".$name. "\n"."mail: ".$mail. "\n"."phone: ".$phone. "\n". "wrote the following: "."\n\n".$title;
		$headers="From: ".$mail;

		if (mail($to, $subject, $message,$headers)) {
			
			echo "<script>alert('Sent Successfully! Thank you"." ".$name. ", we will contact you shortly!');</script>";
			// header('location:contact-us.php');
		}
		
	}
?>