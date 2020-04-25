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
        $ddescription =  $_POST['comment'];
        echo "$uname $email $ddescription"
    
    if(isset($_POST['submit']))
    {
        
        
        $sql = "INSERT INTO `complain`(`Uname`, `Email`, `Description1`) VALUES (['$uname'],['$email'],['$ddescription'])";
        if(mysqli_query($conn,$sql)){
            echo "Not inserted";
        }
        else{
            echo "inserted";
        }
    }
    
?>