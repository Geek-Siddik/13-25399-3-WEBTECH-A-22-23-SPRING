<!-- 13-25399-3 LAB TASK 3 (TASK 2) -->
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
</body>

</html>