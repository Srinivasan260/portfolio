<?php
if (isset($_POST['submit'])){
    
    $name=$_POST['fname'];
    $message=$_POST['message'];
    $subject=$_POST['subject'];
    $emailid=$_POST['email'];
    
   
    $servername = "mysql.selfmade.ninja:3306";
    $username = "srinivasan";
    $password = "srini001";
    $dbname = "srinivasan_register";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";

    $sql = "INSERT INTO portfolio VALUES('$name','$emailid','$subject','$message')";

    $result = $conn->query($sql);
    
    // if ($result == TRUE) {
    
    //   echo "New record created successfully.";
    
    // }else{
    
    //   echo "Error:". $sql . "<br>". $conn->error;
    
    // } 
  
    
    
    $conn->close(); 
  
  
    }

    ?>