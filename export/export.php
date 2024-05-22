<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label for="">Food_id</label><br>
        <input type="number" name="foodid" id=""><br><br>
        <label for="">ExportDate</label><br>
        <input type="date" name="date" id=""><br><br>
        <label for="">Quantity</label><br>
        <input type="number" name="quantity" id=""><br><br>
        <button name="submit">Add New</button>
        <button><a href="display.php">Cancel</a></button>
    </form>
</body>
</html>