<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) 
$feedback = $_POST['feedback'];
        {
			$sql = "INSERT INTO feedback (feedback)
			VALUES ('$feedback')";
	$result = mysqli_query($conn, $sql);
	
	
	    }



?>
<!DOCTYPE html>
<html>
<head>
	
<title>FeedBack </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<div class="container">
<form action="" method="POST" class="login-email">
<p class="login-text" style="font-size: 2rem; font-weight: 800;">FeedBack <br/>Help us to do better..!!!</p>

			<div class="input-group">
				<input type="text" placeholder="Your Suggestions.?" name="feedback" value="<?php echo $feedback; ?>" required>
			</div>
            <div class="input-group">
				<button name="submit" class="btn">submit</button>
			</div>
<center><p  class="login-register-text"><a href="index.php">HOME</a></p></center>
    </form>
    </div>


</body>
</html>

