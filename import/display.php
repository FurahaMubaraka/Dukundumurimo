<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="../manager/display.php">Manager</a></li>
            <li><a href="../foods/display.php">Foods</a></li>
            <li><a href="../import/display.php">Import</a></li>
            <li><a href="../export/display.php">Export</a></li>
        </ul>
    </nav>
    <button><a href="import.php">Add New</a></button>
    <table border="1">
        <tr>
            <th>Import_id</th>
            <th>Food_id</th>
            <th>importdate</th>
            <th>Quantity</th>
            <th colspan="2">Main operation</th>
        </tr>
        <?php 
        include('connection.php');
        $select=mysqli_query($conn,"SELECT * FROM import");
        $count=1;
        while($row=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['foodid'] ?></td>
            <td><?php echo $row['importdate'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><a href="update.php?upd=<?php echo $row['i_id'] ?>">Update</a></td>
            <td><a href="delete.php?dlt=<?php echo $row['i_id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>