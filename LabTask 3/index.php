<!-- 13-25399-3 LAB TASK 3 -->
<!DOCTYPE html>
<html>

<head>
     <title>13-25399-3 LAB TASK 3</title>

     <style>
          .error {
               color: #FF0000;
          }
     </style>
</head>

<body>
     <!-- TASK 1 -->
     <!-- TASK 1 -->
     <?php
     $username = $password = $check = "";
     $usernameErr = $passwordErr = $checkErr = "";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          #USER NAME VERIFICATION
          if (empty($_POST["username"])) {
               $usernameErr = "User Name can not be Empty";
          } else {
               $username = $_POST["username"];
               if (!preg_match("/^[a-zA-Z-0-9' ]*$/", $username)) {
                    $usernameErr = "Only letters and white spaces are allowed";
               } else if (strlen($_POST["username"]) < 2) {
                    $usernameErr = "Name must contain at least 2 words";
               }
          }

          #PASSWORD VERIFICATION
          if (empty($_POST["password"])) {
               $passwordErr = "Password is required";
          } else {
               $password = $_POST["password"];
               if (strlen($password) < 8) {
                    $passwordErr = "Password must be contain at least 8 characters";
               }
          }
     }

     function test_input($data)
     {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
     }
     ?>

     <div>

          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
               <fieldset>
                    <legend>
                         <h2>LOGIN</h2>
                    </legend>
                    <legend>User Name:</legend>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                    <span class="error">* <?php echo $usernameErr; ?></span>
                    <br>

                    <legend>Password:</legend>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                    <span class="error">* <?php echo $passwordErr; ?></span>
                    <br>

                    <input type="checkbox" name="check" value="Remember Me<?php echo $check ?>">Remember Me
                    <br>
                    <button type="submit" value="1" name="Task1">Submit ME</button>
                    <span><a href="#">Forgot password?</a></span>

                    <?php
                    echo "<h2>Input:</h2>";
                    echo $username;
                    echo "<br>";
                    echo $password;
                    echo "<br>";
                    ?>

               </fieldset>
          </form>
     </div>


     <!-- TASK 2 -->
     <!-- TASK 2 -->
     <?php
     $currentpassword = $newpassword = $retypepassword = "";
     $currentpasswordErr = $newpasswordErr = $retypepasswordErr = "";
     $setuppassword = "siddik";

     if ($_SERVER['REQUEST_METHOD'] == "POST") {

          #Current Password Verification
          if (empty($_POST["currentpassword"])) {
               $currentpasswordErr = "Current password is required";
          } else {
               $currentpassword = $_POST["currentpassword"];

               if ($setuppassword !== $currentpassword) {
                    $currentpasswordErr = "Current password is not matching";
               }
          }

          #New Password Verification
          if (empty($_POST["newpassword"])) {
               $newpasswordErr = "New password is required";
          } else {
               $newpassword = $_POST["newpassword"];

               if ($newpassword == $currentpassword) {
                    $newpasswordErr = "New password must not be same as current password";
               }
          }

          #Retype New Password
          if (empty($_POST["retypepassword"])) {
               $retypepasswordErr = "Retype password is required";
          } else {
               $retypepassword = $_POST["retypepassword"];

               if ($retypepassword != $newpassword) {
                    $retypepasswordErr = "Password does not match";
               }
          }
     }
     ?>



     <div>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
               <fieldset>
                    <legend>
                         <h2>Change Password</h2>
                    </legend>

                    Current Password:
                    <br>
                    <input type="text" name="currentpassword" value="<?php echo $currentpassword; ?>">
                    <span class="error">* <?php echo $currentpasswordErr ?></span>
                    <br>
                    New Password:
                    <br>
                    <input type="text" name="newpassword" value="<?php echo $newpassword; ?>">
                    <span class="error">* <?php echo $newpasswordErr ?></span>
                    <br>
                    Retype New Password:
                    <br>
                    <input type="text" name="retypepassword" value="<?php echo $retypepassword; ?>">
                    <span class="error">* <?php echo $retypepasswordErr ?></span>
                    <br>

                    <button type="submit" value="2" name="Task2">Submit ME</button>
                    <br>

                    <?php
                    echo "<h2>Input:</h2>";
                    echo $currentpassword;
                    echo "<br>";
                    echo $newpassword;
                    echo "<br>";
                    echo $retypepassword;
                    echo "<br>";
                    ?>

               </fieldset>
          </form>
     </div>

     <!-- TASK 3 -->
     <!-- TASK 3 -->
     <div>
          <form action="index.php" method="post" enctype="multipart/form-data">
               <fieldset>
                    <legend>
                         <h2>Profile Picture</h2>
                    </legend>

                    <img src="defaultpic.jpg" height="200px" width="200px">
                    <br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <button type="submit" value="3" name="Task3">Upload</button>

               </fieldset>
          </form>
     </div>

     <?php
     $target_dir = "uploads/";
     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

     // Check if image file is a actual image or fake image
     if (isset($_POST["Task3"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

          if ($check !== false) {
               echo "File is an image - " . $check["mime"] . ".";
               $uploadOk = 1;
          } else {
               echo "File is not an image.";
               $uploadOk = 0;
          }
     }

     // Check if file already exists
     if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
     }

     // Check file size
     if ($_FILES["fileToUpload"]["size"] > 4000000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
     }

     // Allow certain file formats
     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
          echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
          $uploadOk = 0;
     }

     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
     } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
          } else {
               echo "Sorry, there was an error uploading your file.";
          }
     }
     ?>

     <!-- TASK 4 -->
     <!-- TASK 4 -->
     <br>
     <div>
          <fieldset>
               <Legend>
                    <h2>Add Data to JSON File</h2>
               </Legend>
               <form method="post">
                    <?php
                    if (isset($error)) {
                         echo $error;
                    }
                    ?>

                    <br />
                    <label>Name:</label><br>
                    <input type="text" name="name" /><br>

                    <label>E-mail:</label><br>
                    <input type="text" name="email"><br>

                    <label>User Name:</label><br>
                    <input type="text" name="un"><br>

                    <label>Password:</label><br>
                    <input type="password" name="pass"><br>

                    <label>Confirm Password:</label><br>
                    <input type="password" name="Cpass"><br>


                    <legend>Gender:</legend>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label><br>

                    <legend>Date of Birth:</legend>
                    <input type="date" name="dob"> <br>


                    <button type="submit" value="4" name="Task4">Add</button>

                    <?php
                    if (isset($message)) {
                         echo $message;
                    }
                    ?>
               </form>
               <a href="data.php">Show Data</a?>
          </fieldset>
     </div>
     <br>

     <?php $message = '';
     $error = '';

     if (isset($_POST["Task4"])) {
          if (empty($_POST["name"])) {
               $error = "<label>Enter Name</label>";
          } else if (empty($_POST["email"])) {
               $error = "<label>Enter an e-mail</label>";
          } else if (empty($_POST["un"])) {
               $error = "<label>Enter a username</label>";
          } else if (empty($_POST["pass"])) {
               $error = "<label >Enter a password</label>";
          } else if (empty($_POST["Cpass"])) {
               $error = "<label>Confirm password field cannot be empty</label>";
          } else if (empty($_POST["gender"])) {
               $error = "<label>Gender cannot be empty</label>";
          } else {
               if (file_exists('data.json')) {
                    $current_data = file_get_contents('data.json');
                    $array_data = json_decode($current_data, true);
                    $new_data = array(
                         'name'               =>     $_POST['name'],
                         'e-mail'          =>     $_POST["email"],
                         'username'     =>     $_POST["un"],
                         'gender'     =>     $_POST["gender"],
                         'dob'     =>     $_POST["dob"]
                    );
                    $array_data[] = $new_data;
                    $final_data = json_encode($array_data);
                    if (file_put_contents('data.json', $final_data)) {
                         $message = "<label>File Appended Success fully</p>";
                    }
               } else {
                    $error = 'JSON File not exits';
               }
          }
     }
     ?>

</body>

</html>