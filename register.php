<?php
    $con = mysqli_connect("mysql11.000webhost.com", "a6376470_rahul", "rahul007", "a6376470_getroom");
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $contactnumber=$_POST["contactnumber"];
    $gender = $_POST["gender"];
    $dateofbirth = $_POST["dateofbirth"];
    $email=$_POST["email"];

    $statement = mysqli_prepare($con, "INSERT INTO user (name,username, password, contactnumber,gender,dateofbirth,email) VALUES (?, ?, ?, ?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssssss", $name, $username, $password,$contactnumber,$gender,$dateofbirth,$email);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
