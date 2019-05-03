<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css"></link>
<title>Student Details</title>
</head>
<body>
  <div class="headerpart">
  <center><img src="resources/Prairie2.png">
  </div>
    <div class="linkspart">
	<center>
	<a href="page.php"> <font size="+2"> Home </font> </a> &nbsp &nbsp
	<a href="students.php"> <font size="+2"> Students </font> </a>&nbsp &nbsp
	<a href="staff.php"> <font size="+2"> Staff </font> </a>&nbsp &nbsp
	<a href="payment.php"> <font size="+2"> Payment </font> </a>&nbsp &nbsp
	<a href="contactus.php"> <font size="+2"> Contact us </font> </a> &nbsp &nbsp
	</center>
	</div>
	<center>
	<br>
	<p id="desc"><b><u>Student Details</u><b/><p>

	<br>
<table cellpadding="10px" id="paytab" border="1">
<tr>
	<th>Roll No</th>
	<th>Name</th>
	<th>Class</th>
	<th>Section</th>
	<th>Total Fee</th>
	<th>Paid Fee</th>
	<th>Due Fee</th>
</tr>
<?php
	$servername="localhost";
	$username="tayeeb";
	$password="cseb";
	$dbname="studentso";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	if($conn->connect_error){
		die("connection failed: ". $conn->connect_error);
	}
	
	$sql="Select * from students";
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo "<tr><td>".$row["rollno"]."<td>".$row["name"]."<td>".$row["class"]."<td>".$row["section"]."<td>".$row["total_fee"]."<td>".$row["paid_fee"]."<td>".$row["due_fee"]."</tr>";
		}
	}
	else{
		echo "No records found";
	}
	$conn->close();
	?>
</table>
</center>
</body>
</html>