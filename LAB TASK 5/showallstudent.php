<?php  
require_once 'controller/studentinfo.php';

$students = fetchallstudents();

    include "header.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Show All Student</title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Student Name</th>
			<th>Class</th>
			<th>Section</th>
			<th>Roll</th>
			<th>Email</th>
			<th>Present Address</th>
			<th>Contact Number</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($students as $i => $student): ?>
			<tr>
				<td><a href="showstudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['studentname'] ?></a></td>
				<td><?php echo $student['class'] ?></td>
				<td><?php echo $student['section'] ?></td>
				<td><?php echo $student['roll'] ?></td>
				<td><?php echo $student['email'] ?></td>
				<td><?php echo $student['presentaddress'] ?></td>
				<td><?php echo $student['contactnumber'] ?></td>

				<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['studentname'] ?>"></td>
				<td><a href="editstudent.php?id=<?php echo $student['ID'] ?>">Edit</a>&nbsp<a href="controller/deletestudent.php?id=<?php echo $student['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>