<?php


$conn = mysqli_connect("localhost", "root", "","ttcs");


if($_REQUEST['submit']){
$pnr = $_POST['pnr'];

if(empty($pnr)){
    echo "<script>alert('You must type a anything to search!')</script>";
}else{
	$make = '<h4> Wrong PNR or FAKE ticket</h4>';
	$sele = "SELECT * FROM tic WHERE PNR LIKE '%$pnr%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){

		echo '<h4> PNR						: '.$row['PNR'];
		echo '<br> Passenger Name			: '.$row['name'];
        echo '<br> Gender					: '.$row['gender'];
        echo '<br> Age						: '.$row['age'];
        echo '<br> Status					: '.$row['status'];
        echo '<br> Booked On				: '.$row['bookedon'];
        echo '<br> Date Of Journey			: '.$row['doj'];
        echo '<br> Class					: '.$row['class'];
		echo '<br> Seat.No					: '.$row['seat'];
        echo '<br> Boarding	At				: '.$row['from'];
        echo '<br> Destination				: '.$row['to'];
        echo '<br> Ticket Fare				: '.$row['fare'];
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

	<title>Passenger Ticket Details</title>
	
</head>
<body>


<div class="input-group">
<p class="login-register-text" ><a href="search.php">Back</a></p>
				
</div>

 


</body>
</html>