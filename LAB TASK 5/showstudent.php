<?php  
require_once 'controller/studentinfo.php';

$student = fetchstudent($_GET['id']);

    include "header.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Show Student</title>
</head>
<body>

<table>
	<tr>
		<th>Student Name</th>
		<th>Class</th>
		<th>Section</th>
		<th>Roll</th>
		<th>Email</th>
		<th>Present Address</th>
		<th>Contact Number</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showstudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['studentname'] ?></a></td>
		<td><?php echo $student['class'] ?></td>
		<td><?php echo $student['section'] ?></td>
		<td><?php echo $student['roll'] ?></td>
		<td><?php echo $student['email'] ?></td>
		<td><?php echo $student['presentaddress'] ?></td>
		<td><?php echo $student['contactnumber'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['studentname'] ?>"></td>
	</tr>

</table>


</body>
</html>