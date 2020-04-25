<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "login";
    // Create connection
    $conn = mysqli_connect("localhost", "root", "","login");
    // Check connection
    //if (!$conn) {
    //    die("Connection failed: " . mysqli_connect_error());
     //} else{

     //    echo "Connected successfully";

         
    // }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);



     $con = mysqli_connect("localhost","root","");
     mysqli_select_db($con,"login");

	
	

    $result= mysqli_query($conn, "SELECT * FROM users WHERE Username = '$username'") 
                or die("Failed to query database".mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    if ($row['Username'] == $username && $row['Password'] == $password){
        header("location:complain.php");

    }  else{
        echo "Failed login";
    }
   


    
    


?>