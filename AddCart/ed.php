<?php $id=$_GET['id'];
include "connection.php";
$sql=mysqli_query($conn,"select * from register where id='$id'")or die(mysqli_error());
while($row=mysqli_fetch_array($sql)){?>

<!DOCTYPE html>
<html>
<head> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
.modal-header,h4,
.close
{
  background-color: #5cb85c; 
  color:white !important;
  text-align: center;
  font-size: 30px;
}
.modal-footer
{
background-color: #f9f9f9;
}
#myBtn
{
margin-left:90%;
}
</style>

</head>

<body>
<div class="container">
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="padding:35px 50px;"><h4><span class="glyphicon glyphicon-lock"></span>Edit Operation</h4> 
</div>

<div class="modal-body" style="padding:40px 50px;">
<form role="form" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
<label for="usrname">
<span class="glyphicon glyphicon-user"></span> Firstname</label>
<input type="text" class="form-control" name="firstname" id="usrname" value="<?php echo $row['1']; ?>">
</div>

<div class="form-group"><label for="psw"><span class="glyphicon glyphicon-user"></span> Lastname</label>
<input type="text" class="form-control" name="lastname" id="psw" value="<?php echo $row['2']; ?>">
</div>

<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-earpne"></span> Items</label>
<input type="text" name="email" class="form-control" id="usrname" value="<?php echo $row['3']; ?>">
</div>

<div class="form-group"><label for="usrname">
<span class="glyphicon glyphicon-earphone"></span> Phone Number</label>
<input type="text" name="mobilenumber" class="form-control" id="usrname" value="<?php echo $row['4']; ?>">
</div>

<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-educatn"></span> Qunntity</label>
<input type="text" class="form-control" name="education" id="usrname" value="<?php echo $row['5']; ?>">
</div>

<button type="submit" name="update" class="btn btn-success btn-block">
<span class="glyphicon glyphicon-off"></span>Update</button>

</form>
</div>

<div class="modal-footer">
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel</button>
</div>

</div>
</div>
</div>
</div>


<script>$(document).ready(function(){$("#myModal").modal();});</script></body></html><?php } ?>

</form>
<?php 
if(isset($_POST['update'])){$id=$_POST['id'];$fname=$_POST['firstname'];$lname=$_POST['lastname'];$email=$_POST['email'];$mobile=$_POST['mobilenumber'];$education=$_POST['education'];include "connection.php";mysqli_query($conn,"update register set firstname='$fname' , lastname='$lname' , email = '$email', mobile = '$mobile' , education = '$education' where id='$id' ")or die(mysqli_error());

	header("location:index.php");}?>