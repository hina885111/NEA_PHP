<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get CustomerPayment BillForm</title>
</head>
<body>
    <h2> Customer Payment Bill </h2>
    <form action="paymentbillprocess.php" method="post">

    <label>Payment Id</label>
        <input type="text" name="pid"/><br>

    <label>Sc No</label>
        <input type="text" name="sn"/><br>

        <label>Bill Id</label>
        <input type="text" name="bid"/><br>

        <label>Bill Amount</label>
        <input type="text" name="billamt"/><br>

        <label>Payment Method Id</label>
        <input type="text" name="payid"/><br>

        <label>Payment Amount</label>
        <input type="text" name="payamt"/><br>

        <label>Payment Date</label>
        <input type="text" name="paydate"/><br>



        <input type="submit"name="submit" value="submit form"/>
    </form>
    
</body>
</html>