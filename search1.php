<?php
    $con = mysqli_connect("mysql11.000webhost.com", "a6376470_rahul", "rahul007","a6376470_getroom");
    $price = $_POST["price"];
    $shared = $_POST["shared"];
    $location = $_POST["location"];
    $laundry = $_POST["laundry"];
    $mess = $_POST["mess"];
    $price2=$price+1000;
    $price1=$price-1000;

    $response = array();
  

    // $response["success"] = false;
    
    $query ="SELECT * from pg where location= '$location' and  price between $price1  and $price2";
   // mysql_select_db("getrooms");
    $sqlstatus =mysqli_query($con,$query);
    

    if(!$sqlstatus){
        die('Could not query'.mysql_error());
    }
while ( $row=mysqli_fetch_array($sqlstatus,MYSQLI_ASSOC)) {
    # code...
    // $result[]=$row;
   $response[]=$row;
    //   if($row){
    //     //echo"success";
    //      $response["success"] = true;

    // }
    // else{
       
    //     $response["success"] = false;  
    // }
}
   
    
   echo json_encode(array("result"=>$response));
   //echo json_encode(array("result"=>$result));
   mysqli_close($con);
?>