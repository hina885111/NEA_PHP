<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
</head>
<body>
<h2>Payment Method</h2>
    <?php
     include("dbconnect.php");
    if(isset($_POST['submit'])){

    
    $ID=$_POST["id"];
    $Paymentname=$_POST["payname"];
    $Status=$_POST["stat"];

    $query="INSERT INTO tbl_paymentmethod(payment_id,payment_name,status)
    VALUES('$ID','$Paymentname','$Status')";

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
    
</body>
</html>