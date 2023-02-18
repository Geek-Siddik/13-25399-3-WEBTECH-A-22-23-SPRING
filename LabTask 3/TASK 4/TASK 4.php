<!-- 13-25399-3 LAB TASK 3 (TASK 4) -->
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