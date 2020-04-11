<?php 
session_start();
$_SESSION['cid'] = 1;
if(!isset($_SESSION['siss'])){
	die("Not yet authorized to access this page");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>CONGRATULATION!!! You have won the quiz, please submit your details.</p>
	<form method="post" action="submit.php">
		
		Name: <input type="text" name="name"><br>
		City: <input type="text" name="city"><br>
		EmailId: <input type="text" name="emailid"><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>