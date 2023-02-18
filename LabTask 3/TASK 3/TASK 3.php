<!-- 13-25399-3 LAB TASK 3 (TASK 3) -->
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


</body>

</html>