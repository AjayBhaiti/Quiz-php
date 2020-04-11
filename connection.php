<?php
session_start();
$text=$_POST['text'];
if(isset($_POST['submit'])){
    if(!empty($_POST['q'])){
        $id = $_POST['q'];
    }
    else{
        echo '<script>alert("Select one of the options")</script>';
        if($text == 1){
			header("Location: q1.php");
		}
		elseif($text == 2){
			header("Location: q2.php");
		}
		elseif($text == 3){
			header("Location: q3.php");
		}
		elseif($text == 4){
			header("Location: q4.php");
		}
		elseif($text == 5){
			header("Location: q5.php");
		}
    }
}
$conn = mysqli_connect("localhost","root","","quiz");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$res = mysqli_query( $conn, "Select ansid from que where qid=$text");
$row = $res->fetch_assoc();
if($row['ansid'] == $id){
	echo "answer is correct";
	if($text == 1){
		header("Location: q2.php");
	}
	elseif($text == 2){
		header("Location: q3.php");
	}
	elseif($text == 3){
		header("Location: q4.php");
	}
	elseif($text == 4){
		header("Location: q5.php");
	}
	elseif($text == 5){
		echo "yaha pe aa gaya";
		//session_start();
		$_SESSION['siss'] = 1;
		header("Location: final.php");
	}
}
else{
	echo '<script>alert("Sorry, You Lost!")</script>';
	echo '<script>alert("Sorry, better luck next time")</script>';
}
?>