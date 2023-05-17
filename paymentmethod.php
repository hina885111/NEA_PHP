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
    <form action="paymentmethodprocess.php" method="post">
        <label>Payment Id</label>
        <input type="text" name="id"/><br>

        <label>Payment Name</label>
        <input type="text" name="payname"/><br>

        <label>Status</label>
        <input type="text" name="stat"/><br>

        <input type="submit"name="submit" value="submit form"/>
    </form>

    
</body>
</html>
