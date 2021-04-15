<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
.modal-header, h4, 
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
<button type="button" class="btn btn-success btn-lg" id="myBtn">ADD Items </button>

<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="padding:35px 50px;">
<h4><span class="glyphicon glyphicon-lock"></span>ADD Items</h4>
</div>
<div class="modal-body" style="padding:40px 50px;">

<form role="form" method="post">
<div class="form-group">
<label for="usrname">
<span class="glyphicon glyphicon-user"></span> Firstname</label>
<input type="text" class="form-control" name="firstname" id="usrname" placeholder="Enter Your Firstname">
</div>
<div class="form-group"><label for="psw"><span class="glyphicon glyphicon-user"></span> Lastname</label>
<input type="text" class="form-control" name="lastname" id="psw" placeholder="Enter Your Lastname">
</div>

<div class="form-group">
  <label for="usrname"><span class="glyphicon glyphicon-earphoe"></span> Items</label>
   <input type="text" name="email" class="form-control" id="usrname" placeholder="Enter Your Phone Number">
</div>

<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-earphone"></span> Phone Number</label>
<input type="text" name="mobile" class="form-control" id="usrname" placeholder="Enter Your Items">
</div>

<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-items"></span> Quntity</label>
<input type="text" class="form-control" name="education" id="usrname" placeholder="Enter Quntity">
</div>
<button type="submit" name="save" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>ADD</button>
</form>
</div>

<div class="modal-footer">
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Close</button>
</div>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function(){$("#myBtn").click(function(){$("#myModal").modal();});});
</script>

</body>
</html>

<?php if(isset($_POST['save'])){$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$education=$_POST['education'];
include "connection.php";
mysqli_query($conn,"insert into register (firstname,lastname,email,mobile,education)values('$fname','$lname','$email','$mobile','$education')")or die("<script>alert('you are alrady regisred You'r Items')</script>");echo "<script>swal('Success','1 Record Successfully Inserted','success');</script>";
}
?>