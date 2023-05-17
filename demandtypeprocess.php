<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demand Type</title>
</head>
<body>
<h2>Demand Type</h2>
    <?php
     include("dbconnect.php");
    if(isset($_POST['submit'])){

    
    $DID=$_POST["id"];
    $Demandname=$_POST["demandtype"];

    $query="INSERT INTO tbl_demandtype(Demand_id,Demand_name)
    VALUES('$DID','$Demandname')";

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