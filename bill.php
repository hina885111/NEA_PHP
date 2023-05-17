<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Customer BillForm</title>
</head>
<body>
    <h2> Customer  Bill </h2>
    <form action="billprocess.php" method="post">

        <label>  Customer Id</label>
        <input type="text" name="cid"/><br>

        <label>Bill ID</label>
        <input type="text" name="bid"/><br>

        <label>Date of Reading</label>
        <input type="name" name="readdate"/><br>

        <label>Current Reading</label>
        <input type="text" name="currread"/><br>

        <label>Previous Reading</label>
        <input type="text" name="prevread"/><br>

        <label>Bill Month</label>
        <input type="text" name="billmon"/><br>

        <label>Bill Year</label>
        <input type="text" name="billyear"/><br>

        <label>Bill_amount</label>
        <input type="text" name="billamt"/><br>




        <input type="submit"name="submit" value="submit form"/>
    </form>
    
</body>
</html>