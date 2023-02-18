<!-- 13-25399-3 LAB TASK 3 (TASK 1) -->
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
</body>

</html>