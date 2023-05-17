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
    <form action="demandtypeprocess.php" method="post">
        <label>Demand Id</label>
        <input type="text" name="id"/><br>

        <label>Demand Name</label>
        <select name="demandtype">
            <option value=""disabled selected>Choose option</option>
            <option value="5A">5A</option>
            <option value="15A">15A</option>
            <option value="30A">30A</option>
        </select><br>
        <input type="submit"name="submit" value="submit form"/>
    </form>

    
</body>
</html>