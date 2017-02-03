<!DOCTYPE html>
<html>
	<head>
		<style>
			body{
				background-color: black;
			}
		</style>
	</head>
	<body>
		<?php
    		$email=$_POST['email'];
    		$subject = 'Your subject for email';
   		 	$message = 'Body of your message';

    		mail($email, $subject, $message);
		?>

		<h1>Automatic E-Mail</h1>
		
		<form method="POST" action="email-script.php">
    		<label for="email">Email:</label>
    		<input type="text" name="email" id="email" />
    		<input type="submit" value="Ok" />
		</form>
	</body>
</html>