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
        //$image =  $_POST['imgPreview'];
        echo "$uname $email $description";
    
    if(isset($_POST['submit']))
    {
        
        
        $sql = "INSERT INTO `complain` (`Uname`, `Email`, `Description1`) VALUES ('$uname', '$email', '$description')";
        if(mysqli_query($conn,$sql)){
            echo "Inserted";
        }
        else{
            echo "Not Inserted";
        }
    }
    
?>