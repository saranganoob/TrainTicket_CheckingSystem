<?php


$conn = mysqli_connect("localhost", "root", "","ttcs");


if($_REQUEST['submit']){
$no = $_POST['no'];

if(empty($no)){
    echo "<script>alert('You must type a anything to search!')</script>";
}else{
	$make = '<h4> Wrong PNR or FAKE ticket</h4>';
	$sele = "SELECT * FROM train WHERE no LIKE '%$no%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){

		echo '<h4> Train_No						: '.$row['no'];
		echo '<br> Train_Name           			: '.$row['name'];
        echo '<br> Starting At					: '.$row['start'];
        echo '<br> Ending At						: '.$row['end'];
       
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

	<title>Train Details</title>
	
</head>
<body>


<div class="input-group">
<p class="login-register-text" ><a href="search.php">Back</a></p>
				
</div>

 


</body>
</html>