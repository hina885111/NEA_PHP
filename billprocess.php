<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Processing</title>
</head>
<body>
    <h2>Customer bill Detail Processing</h2>
    <?php
     include("dbconnect.php");
    if(isset($_POST['submit'])){

     
    $CUSID=$_POST["cid"];
    $BILLID=$_POST["bid"];
    $DateOFReading=$_POST["readdate"];
    $CurrRead=$_POST["currread"];
    $prevRead=$_POST["prevread"];
    $Billmon=$_POST["billmon"];
    $Billyear=$_POST["billyear"];
    $Billamt=$_POST["billamt"];
  
  
    

   
    $query="INSERT INTO tbl_customerbill(customer_id,bill_id,Date_of_reading,current_reading,previous_reading,bill_month,bill_year,bill_amount)
    VALUES('$CUSID','$BILLID','$DateOFReading','$CurrRead','$prevRead','$Billmon','$Billyear','$Billamt')";

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