<?php 

include 'config.php';

session_start();
error_reporting(0);

?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Fare_Enquiry </title>
</head>
<body>

    <div class="container">
		<form action="faredet.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Fare Enquiry</p>
			<div class="input-group">
				<input type="text" placeholder="Boarding" name="Boarding" >
			</div>
			<div class="input-group">
				<input type="text" placeholder="Departure" name="Departure" >
			</div>
			<div class="input-group">
                <input type="submit" name="submit" class="btn">
			</div>
			<p class="login-register-text"><a href="logout.php">back</a></p>
		</form>
	</div>
    
</body>
</html>

