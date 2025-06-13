<?php
require('connectors/database.php');
$id=$_GET['id']; 
$delEmployee="DELETE from employee where emp_id=".$id.";";
$statement2=$db->prepare($delEmployee);
$statement2->execute();
echo "<script type='text/javascript'>alert('Delete Record Successfully');<script>";
header("location:index.php");	

?>