<?php
include_once 'db.php';
$con = connect_db();
session_start();

	$username = $_GET['username'];
	$fullName = $_GET['fullName'];
	$email = $_GET['email'];

	if(isset($username) && $username != null && isset($fullName) && $fullName != null && isset($email) && $email != null){
		$query = "SELECT * from USERS WHERE username = '$username'";
		$rows = $con->query($query);
		if($rows->rowCount() == 0){
			echo "<p>User Not Found. Please sign in using below link<br>";
			echo "<a href=\"login.html\">Login</a></p>";
		}else{
			if( !isset($_SESSION['username']) || $_SESSION['username'] != $username)
				$_SESSION['views'] = 0;

			foreach($rows as $row){
				$_SESSION['username'] = $row['username'];
				$_SESSION['fullName'] = $row['fullname'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['power_animal'] = $row['power_animal'];

				echo "<br><br><center><p>You are signed in successfully!<br></center>";
				echo "<br><p><center>Welcome and Proceed to your page by clicking <a href=\"welcome.php\">HERE</a></center></p>";
			}
		}
	}else{
			echo "<p>User needs to sign in first. Please sign in using below link<br>";
			echo "<a href=\"login.html\">Login</a></p>";
	}

?>

<html>
<head>
	<title>Recognized user</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #e3e0cf; color: #606060"><center>
	<!-- <button id="myButton" type="button"class="btn btn-lg btn-success">Proceed</button>
	<script type="text/javascript">
		document.getElementById("myButton").onclick = function () {
        location.href = "welcome.php";
    };
	</script></center> -->
</body>
</html>