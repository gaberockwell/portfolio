<?php
	if(isset($_POST['send'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comment=$_POST['comment'];
		$msg=$_POST['msg'];

		$to='rockwell_500@icloud.com';
		$subject='Form Submission';
		$message=Name: ".$name."\n"."Comment: ".$comment."\n". "wrote the following": "."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully!</h1>
		