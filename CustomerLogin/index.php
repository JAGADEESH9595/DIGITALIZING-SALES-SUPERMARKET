<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Customer Home</title>
	<link rel="icon" type="image/png" href="img/home.png" />
<style>

body
{
	margin-top: 87px;
    position: relative;
    top: 153px;
    font-size: 40px;
    color: #fff;
    text-decoration: none;
	background-image: url("./img/2754227.jpg");
	
	


}

a
{
	color: #00000;
	text-decoration: none;

    
}

</style>

</head>
<body>

<center>


<a href="../CustomerLogin/AddCart/index.php" >Items Order To Admin</a>
<br>
<br>
<a href="../CustomerLogin/chatbox/index.php" >Help Desk ChatBot</a>
<br>
<br>



<a href="index.php?logout=true">Logout</a>


</center>

</body>
</html>

