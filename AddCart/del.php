<?php $id=$_GET['id'];include "connection.php";mysqli_query($conn,"delete from register where id='$id'")or die(mysqli_error());header("location:index.php"); ?>

