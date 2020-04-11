<?php 
session_start();

$name = $_POST['name'];
$city = $_POST['city'];
$emailid = $_POST['emailid'];
$conn = mysqli_connect("localhost","root","","quiz");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}
$res = "insert into winner (name,city,emailid) values ('$name','$city','$emailid')";
if($conn->query($res) === TRUE){
	echo '<script>alert("Details has been Submitted")</script>';
}
else{
	echo "Error: " . $res . "<br>" . $conn->error;
}
?>