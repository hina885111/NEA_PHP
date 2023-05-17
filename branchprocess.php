<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch Processing</title>
</head>
<body>
    <h2>Branch Detail Processing</h2>
    <?php
     include("dbconnect.php");
    if(isset($_POST['submit'])){

    
    $BID=$_POST["id"];
    $bname=$_POST["branchname"];
    $stat=$_POST["status"];

    

   
    $query="INSERT INTO tbl_branch(branch_id,branch_name,Status)
    VALUES('$BID','$bname','$stat')";

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