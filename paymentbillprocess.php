<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paymentbill Processing</title>
</head>
<body>
    <h2>Customer Paymentbill Detail Processing</h2>
    <?php
     include("dbconnect.php");
    if(isset($_POST['submit'])){

     
    $PAYID=$_POST["pid"];
    $SCNO=$_POST["sn"];
    $BILLID=$_POST["bid"];
    $Billamt=$_POST["billamt"];
    $Paymentmethodid=$_POST["payid"];
    $Paymentamount=$_POST["payamt"];
    $Paymentdate=$_POST["paydate"];
  
  
    

   
    $query="INSERT INTO tbl_customer_payment(payment_id,Sc_no,bill_id,bill_amt,payment_method_id,payment_amount,payment_date)
    VALUES('$PAYID','$SCNO','$BILLID','$Billamt','$Paymentmethodid','$Paymentamount','$Paymentdate')";

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