<!DOCTYPE HTML>
<html>

    <head>
    <title>LAB TASK 2 13-25399-3</title>
        <style>
        .error {color: #FF0000;}
        </style>
        </head>
        <body>  

<?php
// define variables and set to empty values
$name = $email = $day =  $month = $year = $gender = $degree = $blood =  "";
$nameErr = $emailErr = $dayErr = $monthErr = $yearErr = $genderErr = $degreeErr = $bloodErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Name is Required";
  }
  else
  {
    $name = $_POST["name"];
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name))
    {
      $nameErr = "Only Letters & White Spaces are Allowed";
    }
    else if (str_word_count($_POST["name"])<2)
    {
      $nameErr = "Name Must Contain at least 2 Words";
    }
  }	
  
  if (empty($_POST["email"]))
  {
    $emailErr = "Email is Required";
  }	
  else
  {
  $email = $_POST["email"];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $emailErr = "Invalid e-Mail Format";
  }
  }

  if (empty($_POST["day"]))
  {
    $dayErr = "Day is Required";
  }
  else
  {
    $day = $_POST["day"];
    if ($day > 31 || $day <0)
    {
      $dayErr = "Invalid Day";
    }
  }

  if (empty($_POST["month"]))
  {
    $monthErr = "Month is Required";
  }
  else
  {
    $month = $_POST["month"];
    if ($month > 12 || $month <0)
    {
      $monthErr = "Invalid Month";
    }
  }

  if (empty($_POST["year"]))
  {
    $yearErr = "Year is Required";
  }
  else
  {
    $year = $_POST["year"];
    if ($year > 2010 || $year < 1991)
    {
      $yearErr = "Invalid Year";
    }
  }

  if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is Required";
  }
  else
  {
    $gender = test_input($_POST["gender"]);
  }
    
  if(empty($_POST["degree"]))
  {
    $degreeErr = "Degree is Required";
  }
  else
  {
    $degree = $_POST["degree"];
  }

  if (empty($_POST["blood"]))
  {
    $bloodErr = "Blood Group is Required";
  }
  else
  {
    $blood = $_POST["blood"];
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>13-25399-3 MY FIRST VALIDATED FORM</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  NAME:
  <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  EMAIL:
  <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  DATE OF BIRTH:<br>
  DAY:
  <input type="number" id="day" name="day" value="<?php echo $day;?>">
  <span class="error">* <?php echo $dayErr;?></span>
  MONTH:
  <input type="number" id="month" name="month" value="<?php echo $month;?>">
  <span class="error">* <?php echo $monthErr;?></span>
  YEAR:
  <input type="number" id="year" name="year" value="<?php echo $year;?>">
  <span class="error">* <?php echo $yearErr;?></span>
  <br><br>

  GENDER:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  DEGREES COMPLETED:
  <input type="checkbox" name="degree[]" value="ssc"> SSC
  <input type="checkbox" name="degree[]" value="hsc"> HSC
  <input type="checkbox" name="degree[]" value="bsc"> BSc
  <input type="checkbox" name="degree[]" value="msc"> MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>

  BLOOD GROUP:
  <select name="blood" id="blood">
    <option value="a+">A+</option>
    <option value="a-">A-</option>
    <option value="b+">B+</option>
    <option value="b-">B-</option>
    <option value="o+">O+</option>
    <option value="o-">O-</option>
    <option value="ab+">AB+</option>
    <option value="ab-">AB-</option>
  </select>
  <span class="error">* <?php echo $bloodErr;?></span>
  <br><br>

  <input type="submit" value="Submit">
</form>

<?php
echo "<h2>Input:</h2>";
echo $name ;
echo "<br>";
echo $email;
echo "<br>";
echo $day;
echo "<br>";
echo $month;
echo "<br>";
echo $year;
echo "<br>";
echo $gender;
echo "<br>";
echo "<pre>";
print_r($degree);
echo "</pre>";
echo "<br>";
echo $blood;
?>

</body>
</html>