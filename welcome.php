<?php
    session_start();
	
        echo "<br><br><center>"."User Name : ".$_SESSION['username']."<br>"."</center>";
        echo "<center>"."Full Name : ".$_SESSION['fullName']."<br>"."</center>";
        echo "<center>"."Email ID : ".$_SESSION['email']."<br><br>"."</center>";
        $image = $_SESSION['power_animal'];
        echo "<center>"."<p><img src=\"$image\"></a></p>"."</center>";

        $_SESSION['views'] = $_SESSION['views']+1;
		$views = $_SESSION['views'];
		echo "<center>"."Number of page visits : " .$views."<br>"."</center>";

?>

<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #e3e0cf; color: #606060"><center>
    <!-- <button id="myButton" type="button"class="btn btn-lg btn-success">Proceed</button>
    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
        location.href = "welcome.php";
    };
    </script></center> --> </center>
</body>
</html>