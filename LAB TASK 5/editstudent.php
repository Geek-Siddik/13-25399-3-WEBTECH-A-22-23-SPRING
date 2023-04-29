<?php 

require_once 'controller/studentinfo.php';
$student = fetchStudent($_GET['id']);


 include "header.php";



?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

<form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">

    <fieldset style="width: 400px;">
            <legend><h2>Edit Student</h2></legend>
            <table>

            <!-- <tr>
                <td>Class</td>
                <td></td>
                <td>
                    <label for="class"></label>
                    <select name="class" id="class">
                        <option value="null"></option>
                        <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                        <option value="Four">Four</option>
                        <option value="Five">Five</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Section</td>
                <td>:</td>
                <td>
                    <input type="radio" name="section" id="A"value="A">
                    <label for="A">A</label>

                    <input type="radio" name="section" id="B"value="B">
                    <label for="B">B</label>

                    <input type="radio" name="section" id="C"value="C">
                    <label for="C">C</label>
                </td>
                
            </tr> -->

            <tr>
                <td>Student Name</td>
                <td>:</td>
                <td><input value="<?php echo $student['studentname'] ?>" type="text" id="studentname" name="studentname" ></td>
            </tr>

            <tr>
                <td>Roll</td>
                <td>:</td>
                <td><input value="<?php echo $student['roll'] ?>" type="number" id="roll" name="roll" readonly></td>
            </tr>

            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input value="<?php echo $student['email'] ?>" type="text" id="email" name="email" ></td>
            </tr>

            <tr>
                <td>Present Address</td>
                <td>:</td>
                <td><input value="<?php echo $student['presentaddress'] ?>" type="text" id="presentaddress" name="presentaddress" ></td>
            </tr>

            <tr>
                <td>Contact Number</td>
                <td>:</td>
                <td><input value="<?php echo $student['contactnumber'] ?>" type="number" id="contactnumber" name="contactnumber" ></td>
            </tr>
        </table>

        <input type="file" name="image"> <br><br>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

        <input type="submit" name = "updatestudent" value="update">
        <input type="reset">
        
        </fieldset>
  <!-- <label for="name">Name:</label><br>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name" readonly><br>
  <label for="surname">Surname:</label><br>
  <input value="<?php echo $student['Surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $student['Username'] ?>" type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset">  -->
</form> 

</body>
</html>

