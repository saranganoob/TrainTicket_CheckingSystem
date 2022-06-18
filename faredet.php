<?php


$conn = mysqli_connect("localhost", "root", "","ttcs");


if($_REQUEST['submit']){
$Boarding = $_POST['Boarding'];
$Departure = $_POST['Departure'];

if(empty($Departure)){
    echo "<script>alert('You must type a anything to search!')</script>";
}else{
	$make = '<h4> Station Invalid..!!</h4>';
	$sele = "SELECT * FROM station WHERE Boarding  LIKE  '%$Boarding%' AND Departure  LIKE '%$Departure%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){

			echo '<h4> Boarding				: '.$row['Boarding'];
			echo '<br>  Departure			: '.$row['Departure'];
			echo '<br> fare					: '.$row['fare'];
			echo '</h4>';
		
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Fare Details</title>
	
</head>
<body>


<div class="input-group">
<p class="login-register-text" ><a href="farenq.php">Back</a></p>
				
</div>

 


</body>
</html>