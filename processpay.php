<html>
<head>
<title>Processing</title>
<link rel="stylesheet" type="text/css" href="styles.css"></link>
</head>
<body>
	<?php
	$amt=$_POST["paidamt"];
	$roll=$_POST["roll"];
	$servername="localhost";
	$username="tayeeb";
	$password="cseb";
	$dbname="studentso";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	if($conn->connect_error){
		die("connection failed: ". $conn->connect_error);
	}
	
	$sql="update students set paid_fee='$amt',due_fee=due_fee-'$amt.' where rollno='$roll'";
	$conn->query($sql);
	$conn->close();
	echo '<script type="text/javascript">
           window.location = "payment.php";
      </script>';
	?>
</body>
</html>
