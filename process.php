<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Processing</title>
</head>
<body>
    <h2>Customer Detail Processing</h2>
    <?php
     include("dbconnect.php");
    if(isset($_POST['submit'])){

    
    $SCNO=$_POST["sn"];
    $CUSID=$_POST["id"];
    $fullname=$_POST["fullname"];
    $demandtype=$_POST["demandtype"];
    $mobile=$_POST["phonenumber"];
    

   
    $query="INSERT INTO tbl_customer(SC_No,Customer_id,customer_fullname,Demand_type,Mobile_no)
    VALUES('$SCNO','$CUSID','$fullname','$demandtype','$mobile')";

    echo $query;
    $result=mysqli_query($conn,$query);
    if($result){
        echo"Data Inserted successfully";
    }
    else{
        echo"Error:".$query.":-".mysqli_error($conn);
    }
    mysqli_close($conn);
}
    
    ?>
    
</body>
</html>