<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css"></link>
<title>Staff Details</title>
</head>
<body>
  <div class="headerpart">
  <center><img src="resources/Prairie2.png"></center>
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
	<p id="desc"><b><u>Staff Details</u><b/><p>


	<br>
<table cellpadding="10px" id="paytab" border="1">
<tr>
	<th>Employee ID</th>
	<th>Name</th>
	<th>Designation</th>
	<th>Salary</th>
	<th>Telephone</th>
</tr>
<?php
	$servername="localhost";
	$username="tayeeb";
	$password="cseb";
	$dbname="staff";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	$sql="Select * from staffso";
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo "<tr><td>".$row["e_id"]."<td>".$row["name"]."<td>".$row["job"]."<td>".$row["sal"]."<td>".$row["tel"]."</tr>";
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