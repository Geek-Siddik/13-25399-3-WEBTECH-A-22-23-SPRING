<?php 

require_once '../model/model.php';




if (isset($_POST['createstudent'])) {
	$data['class'] = $_POST['class'];
	$data['section'] = $_POST['section'];
	$data['studentname'] = $_POST['studentname'];
	$data['roll'] = $_POST['roll'];
	$data['email'] = $_POST['email'];
	$data['presentaddress'] = $_POST['presentaddress'];
	$data['contactnumber'] = $_POST['contactnumber'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		echo "The user ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } 
  else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addstudent($data)) {
  	echo 'Successfully Added!!';
  }
} 
else {
	echo 'You are not allowed to access this page.';
}

?>