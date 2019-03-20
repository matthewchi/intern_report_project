<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if file is an actual file or fake file
    if(isset($_POST["submit"])) {
        $check = getfilesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is real - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
        else {
            echo "File is fake";
            $uploadOk = 0;
        }
    }

    // Allow certain file formats
    if($fileType != "zip" ) {
        echo "Sorry, only zip files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>
<!DOCTYPE html>
<html>
<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select files to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>

</body>
</html>