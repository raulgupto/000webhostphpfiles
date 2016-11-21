<?php
    $con = mysqli_connect("mysql11.000webhost.com", "a6376470_rahul", "rahul007", "a6376470_getroom");
    
    $price = $_POST["price"];
    $shared = $_POST["shared"];
    $location = $_POST["location"];
    $laundry = $_POST["laundry"];
    $mess=$_POST["mess"];

    $statement = mysqli_prepare($con, "INSERT INTO pg (price, shared, location, laundry, mess) VALUES (?, ?, ?, ?,?)");
    mysqli_stmt_bind_param($statement, "issss", $price, $shared, $location, $laundry,$mess);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
