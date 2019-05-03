<html>
	<?php
	$servername="localhost";
	$username="tayeeb";
	$password="cseb";
	$dbname="registrationform";
	
	$uname=$_POST['username'];
	$pwd=$_POST['password'];
	$email=$_POST['email'];
	$fullname=$_POST['fullname'];
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	if($conn->connect_error){
		die("connection failed: ". $conn->connect_error);
	}
	$sql="insert into details values('$uname','$pwd','$email','$fullname')";
	$conn->query($sql);
	$conn->close();
	echo '<script type="text/javascript">
           window.location = "getdata.php";
      </script>';
	?>
</html>