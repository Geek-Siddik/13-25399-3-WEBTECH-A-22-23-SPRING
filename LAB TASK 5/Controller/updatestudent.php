<?php  
require_once '../model/model.php';


if (isset($_POST['updatestudent'])) {
	$data['studentname'] = $_POST['studentname'];
	$data['roll'] = $_POST['roll'];
	$data['email'] = $_POST['email'];
	$data['presentaddress'] = $_POST['presentaddress'];
	$data['contactnumber'] = $_POST['contactnumber'];
	
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateStudent($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showStudent.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>