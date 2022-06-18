<?php 

include 'config.php';

session_start();
error_reporting(0);


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}


?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Enter_PNR </title>
</head>
<body>

    <div class="container">
    <div class="h1"> <h1> <?php echo "<h1>WelcomeBack " . $_SESSION['username'] . "</h1>"; ?> </h1> </div>
		<form action="result.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Enter_PNR</p>
			<div class="input-group">
				<input type="text" placeholder="PNR" name="pnr" >
			</div>
			<div class="input-group">
                <input type="submit" name="submit" class="btn">
			</div>
			<p class="login-register-text"><a href="logout.php">Logout</a></p>
		</form>
	</div>
    
</body>
</html>

