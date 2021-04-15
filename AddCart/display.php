<?php include 'connection.php';
$show=mysqli_query($conn,"select * from register");
?>'

<table class="table table-bordered table-striped ">
<tr class="bg-dark text-white">
<th>ID.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Items</th>
<th>Phone Number </th>
<th>Quntity</th>
<th><center>Edit Operation</th>
<th><center>Delete Operation</th></tr> 

<?php $number = 1;while($row=mysqli_fetch_array($show)){?><tr><td><?php echo $number;
?>
</td>
<td><?php echo $row['firstname'];
 ?>
</td>

<td>
<?php echo $row['lastname']; 
?>
</td>

<td>
<?php 
echo $row['email'];
 ?>
</td>

<td>
<?php 
echo $row['mobile'];
 ?>
</td>

<td>
<?php 
echo$row['education']; 
?>
</td>

<?php $number++ ?>
<td>

<a style="margin-left:50px;" class="btn btn-success" href="ed.php?id=<?php echo $row['id'];
 ?>">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a></td><td>
<a  style="margin-left:50px;"  class="btn btn-danger" onclick="return confirm(' You want To Delete ');" href="del.php?id=<?php echo $row['id']; ?>">Delete</a></td></tr><?php } ?>