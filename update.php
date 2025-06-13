<?php
require('connectors/database.php');
$id=$_GET['id']; 
$queryDepartment='select dep_id, dep_name from department';
$queryEmployee="select emp_id, emp_lname, emp_fname, hire_date, salary, dep_id from employee where emp_id=".$id.";";
$statement2=$db->prepare($queryDepartment);
$statement3=$db->prepare($queryEmployee);
$statement2->execute();
$statement3->execute();
$departments=$statement2->fetchAll();
$employee=$statement3->fetch();
$statement2->closeCursor();
$statement3->closeCursor();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Employees Edit/Update</title>
	<link rel="stylesheet" href="css\style.css" />
</head>
<body>
<form id="EmpForm" action="" method="get">
<fieldset id="TripInfo">
	<legend>Employee  Edit/Update</legend>
	<div class="formRow">
		<label for="EmpLname">Employee Last Name : </label>
		<input name="EmpLname" id="EmpLname" type="text" value="<?= $employee['emp_lname']; ?>">
	</div>
	<div class="formRow">
		<label for="EmpFname">Employee First Name : </label>
		<input name="EmpFname" id="EmpFname" type="text" value="<?= $employee['emp_fname']; ?>">
	</div>
	<div class="formRow">
		<label for="EmpHdate">Employee Hire Date : </label>
		<input name="EmpHdate" id="EmpHdate" type="date" value="<?= $employee['hire_date']; ?>">
	</div>
	<div class="formRow">
		<label for="EmpSalary">Employee Salary : </label>
		<input name="EmpSalary" id="EmpSalary" type="text" value="<?= $employee['salary']; ?>">
	</div>
	<div class="formRow">
		<label for="department">Employee Department : </label>
		<select name="department" id="department">
    			<?php foreach($departments as $department): ?>
					<?php if($employee['dep_id']==$department['dep_id']): ?>
					<option value="<?= $department['dep_id']; ?>" selected><?= $department['dep_name']; ?></option>
					<?php else : ?>
					<option value="<?= $department['dep_id']; ?>"><?= $department['dep_name']; ?></option>
					<?php endif; ?>
    			<?php endforeach; ?>
		</select>
	</div>
	<br>
	<input type="submit" value="Update" name="submit">
	<input type="reset" value="Clear">
</fieldset>
</form>
</body>

</html>