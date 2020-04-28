<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "login";
    
    // Create connection
    $conn = mysqli_connect("localhost", "root", "","login");
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else{
       echo "Connected successfully";
    }

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $description =  $_POST['comment'];
    $imageName = NULL;

    //check image upload
    $uploadOk = 1;
    if($_FILES["imgFile"]["error"] == 0) {
        $target_dir = $_SERVER["DOCUMENT_ROOT"]."/complain_box/uploads/";
        $target_file = $target_dir . basename($_FILES["imgFile"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["imgFile"]["tmp_name"]);
            if($check !== false) {
                echo "<br>". "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "<br>". "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check file size
        /* if ($_FILES["imgFile"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        } */
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "<br>". "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<br>". "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            $temp = explode(".", $_FILES["imgFile"]["name"]);
            $imageName = time() . '.' . end($temp);
            $newName = $target_dir . $imageName;
            if (move_uploaded_file($_FILES["imgFile"]["tmp_name"], $newName)) {
                echo "<br>". "The file ". basename( $_FILES["imgFile"]["name"]). " has been uploaded.";
            } else {
                echo "<br>". "Sorry, there was an error uploading your file.";
                $uploadOk = 0;
            }
        }
    }
 
    if(isset($_POST['submit'])) {
        
        if ($uploadOk == 1) {
            $sql = "INSERT INTO `complain` (`Uname`, `Email`, `Description1`, `ImagePath`) VALUES ('$uname', '$email', '$description', '$imageName')";
            if(mysqli_query($conn,$sql)){
                echo "<br>". "Inserted to Database";
            }
            else{
                echo "Not Inserted to Database";
            }
        }
    }
    
?>