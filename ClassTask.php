<!DOCTYPE html>
<html>

<head>

    <script>
        function validateForm() {
            let x = document.getElementById("name").value;
            let y = document.getElementById("password").value;
            
            let isvalid = true;

            if (x == "") {
                document.getElementById("nameErr").innerHTML = "Name is required";
                document.getElementById("name").style.borderColor = "red";
                isvalid = false;
            }

            else {
            document.getElementById("nameErr").innerHTML = x;
            document.getElementById("name").style.borderColor = "black";
            }

            if (y == "") {
                document.getElementById("passErr").innerHTML = "Password is required";
                document.getElementById("password").style.borderColor = 'red';
                isvalid = false;
            }

            else{
            document.getElementById("passErr").innerHTML = x;
            document.getElementById("password").style.borderColor = "black";
            }

            return isvalid;
        }
    </script>
</head>

<body>
    <form name="myForm" onsubmit="return validateForm()" method="post">
        Name: <input id="name" type="text" name="fname">
        <br>
        <span id="nameErr"></span>
        <br>
        Password: <input id="password" type="password" name="password">
        <br>
        <span id="passErr"></span><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>