<?php
  $con = mysqli_connect("mysql11.000webhost.com", "a6376470_rahul", "rahul007","a6376470_getroom");
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id, $name, $username, $password,$contactnumber,$gender,$dateofbirth);
    
    $response = array();
    $response["success"] = true;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["name"] = $name;
        $response["age"] = $age;
        $response["username"] = $username;
        $response["password"] = $password;
    }
    
    echo json_encode($response);
?>
