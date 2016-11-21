<?php
    $con = mysqli_connect("mysql11.000webhost.com", "a6376470_rahul", "rahul007","a6376470_getroom");
    
    $price = $_POST["price"];
    $shared = $_POST["shared"];
    $location = $_POST["location"];
    $laundry = $_POST["laundry"];
    $mess = $_POST["mess"];

    $response = array();
    $response["success"] = false;
    
    $query ="SELECT * from pg where price= '$price' and  shared='$shared'";
   // mysql_select_db("getrooms");
    $sqlstatus =mysqli_query($con,$query);
    

    if(!$sqlstatus){
        die('Could not query'.mysql_error());
    }

    $row=mysqli_fetch_array($sqlstatus,MYSQLI_ASSOC);

    if($row){
        //echo"success";
         $response["success"] = true;
         $response["pg_id"] = $row["pg_id"];
        $response["price"] = $row["price"];
         $response["shared"] = $row["shared"];
        $response["location"] = $row["location"];
       
        $response["laundry"] = $row["laundry"];
        $response["mess"] = $row["mess"];


    }
    else{
       
        $response["success"] = false;  
    }
   
    
   echo json_encode($response);
?>
