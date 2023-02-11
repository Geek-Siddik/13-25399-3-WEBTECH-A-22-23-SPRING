<!DOCTYPE HTML>
<html>

    <head>
        <style>
        .error {color: #FF0000;}
        </style>
        </head>
        <body>  

<?php
// define variables and set to empty values
$name = $id = $gender = $semester = $c1 = $c2 = $c3 = $address = "";
$nameErr = $idErr = $genderErr = $semesterErr = $addressErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Name is required";
  } else
  {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["id"]))
  {
    $idErr = "ID is required";
  } else
  {
    $id = test_input($_POST["id"]);
  }

  if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is required";
  } else
  {
    $gender = test_input($_POST["gender"]);
  }

    
  if (empty($_POST["semester"]))
  {
    $semesterErr = "Semester is required";
  } else
  {
    $semester = test_input($_POST["semester"]);
  }

  if (empty($_POST["c1"])) {
    $c1 = "";
  } else {
    $c1 = test_input($_POST["c1"]);
  }

  if (empty($_POST["c2"])) {
    $c2 = "";
  } else {
    $c2 = test_input($_POST["c2"]);
  }

  if (empty($_POST["c3"])) {
    $c3 = "";
  } else {
    $c3 = test_input($_POST["c3"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>13-25399-3 MY FIRST FORM</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:
  <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  ID:
  <input type="text" name="id">
  <span class="error">* <?php echo $idErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Please select the semester you have enrolled on:
  <select id="semester" name="semester">
  <option value="fall">Fall</option>
  <option value="summer">Summer</option>
  <option value="spring">Spring</option>
  </select>
  <span class="error">* <?php echo $semesterErr;?></span>
  <br><br>

  <p>Class Time Preferences:</p>
  <input type="checkbox" id="c1" name="c1" value="morning">
  <label for="c1"> Morning</label><br>
  <input type="checkbox" id="c2" name="c2" value="noon">
  <label for="c2"> Noon</label><br>
  <input type="checkbox" id="c3" name="c3" value="afternoon">
  <label for="c3"> Afternook</label>
  <br><br>

  Address:
  <textarea name="address" rows="5" cols="40"></textarea>
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Input:</h2>";
echo $name ;
echo "<br>";
echo $id;
echo "<br>";
echo $gender;
echo "<br>";
echo $semester;
echo "<br>";
echo $c1;
echo "<br>";
echo $c2;
echo "<br>";
echo $c3;
echo "<br>";
echo $address;
?>

</body>
</html>
