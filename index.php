<?php 

include 'config.php';
session_start();

error_reporting(0);

if (isset($_POST['submit'])) 
        {
		header("Location: login.php");
	    }
if (isset($_POST['trainenq'])) 
        {
		header("Location: trainenq.php");
	    }
if (isset($_POST['fedb'])) 
        {
		header("Location: feedback.php");
	    }
if (isset($_POST['fe'])) 
        {
		header("Location: farenq.php");
	    }

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>HOME</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<form action="" method="POST" class="login-email">
<p class="login-text" style="font-size: 2rem; font-weight: 800;">Railway Ticket Checking System <br/>[ RTCS ]</p>

            <div class="input-group">
				<button name="submit" class="btn">Check a Ticket</button>
			</div>

            <div class="input-group">
				<button name="trainenq" class="btn">Train Enquiry</button>
			</div>

            <div class="input-group">
				<button name="fe" class="btn">Fare Enquiry</button>
			</div>

            <div class="input-group">
				<button name="fedb" class="btn">FeedBack</button>
			</div>

    </form>
    </div>


</body>
</html>

