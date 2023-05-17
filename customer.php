<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Customer Entry Form</title>
</head>
<body>
    <h2>NEA Bill Customer Detail Entry Form</h2>
    <form action="process.php" method="post">
        <label>SC NO</label>
        <input type="text" name="sn"/><br>

        <label>Customer Id</label>
        <input type="text" name="id"/><br>

        <label>Full Name</label>
        <input type="text" name="fullname"/><br>

        <label>MobileNumber</label>
        <input type="text" name="phonenumber"/><br>

        <label>Demand Types</label>
        <select name="demandtype">
            <option value=""disabled selected>Choose option</option>
            <option value="5">5A</option>
            <option value="15">15A</option>
            <option value="30">30A</option>
        </select><br>
        <input type="submit"name="submit" value="submit form"/>
    </form>
    
</body>
</html>