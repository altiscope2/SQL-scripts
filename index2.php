<?php
require('connectors/database.php');

$queryEmployees='select e.emp_id,e.emp_lname,e.emp_fname,d.dep_name,l.location_name from employee e,
department d, locations l where e.dep_id=d.dep_id and d.dep_loc = l.dep_loc;';
$statement1=$db->prepare($queryEmployees);
$statement1->execute();
$employees=$statement1->fetchAll();
$statement1->closeCursor();
?>

<DOCTYPE html>
<html>
<head>
	<title>Employees Report</title>
	<link rel="stylesheet" href="css\style.css" />
</head>
<body>
<h1>Employee Report gustavo</h1>
<table class="report">
<tr>
  <th>Last Name</th>
  <th>First Name</th>
  <th>Department</th>
  <th>Location</th>
  <th>Delete</th>
  <th>Edit</th>
</tr>
<?php foreach ($employees as $employee):  ?>
  <tr>
  <td><?php echo $employee['emp_lname']; ?></td>
	<td><?php echo $employee['emp_fname']; ?></td>
	<td><?php echo $employee['dep_name']; ?></td>
	<td><?php echo $employee['location_name']; ?></td>
	<td><a href="delete.php?id=<?php echo $employee['emp_id']; ?>">Delete</a></td>
	<td><a href="update.php?id=<?php echo $employee['emp_id']; ?>">Edit</a></td>
  </tr>
<?php endforeach; ?>
</table>
<a href="add.php">Add New Employee</a>
</body>
</html>



