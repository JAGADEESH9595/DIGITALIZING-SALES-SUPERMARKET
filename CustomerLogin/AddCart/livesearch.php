<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<?php
$id=$_GET['q'];
include "connection.php";
$sql=mysqli_query($conn,"select * from register where firstname like '$id%'");
?>
<table class="table table-bordered table-striped">
	<style type="text/css">
		.color{
			animation: 1s meet infinite;
			font-size: 4em;
		}
		@keyframes meet{
			25%{color: red;}
			50%{color:blue;}
			75%{color:green;}
			100%{color:white;}
		}
	</style>
	<center><h2 class="color">Your Seraching Items</h2></center>
	<tr class="bg-dark text-white">
		<th>ID</th>
		<th>Firstname</th>
		<th>Last Neme</th>
		<th>Items</th>
		<th>Phone Number</th>
		<th>Quntity</th>
	</tr>
<?php
while($r=mysqli_fetch_array($sql))
{
?>
<tr>
	<td><?php echo $r['0']; ?></td>
	<td><?php echo $r['1']; ?></td>
	<td><?php echo $r['2']; ?></td>
	<td><?php echo $r['3']; ?></td>
	<td><?php echo $r['4']; ?></td>
	<td><?php echo $r['5']; ?></td>
</tr>
<?php
}
?>