<!DOCTYPE html>
<html>
<head>
	<title>Q1</title>
</head>
<body>
	<p>What is the Full form of php?</p>
	<form action="connection.php" method="POST">
		<input type="radio" name="q" value=1> Private Hypertext Preprocessor <br>
		<input type="radio" name="q" value=2> Personal Home Page <br>
		<input type="radio" name="q" value=3> Personal Hypertext Page <br>
		<input type="radio" name="q" value=4> Non of these <br>
		<input type="hidden" name="text" value="<?php echo '1'; ?>">
        <input type="submit" name="submit" value=submit>
	</form>
</body>
</html>