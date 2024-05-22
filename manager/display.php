<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
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
    <button><a href="manager.php">Add New</a></button>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th colspan="2">OPERATION</th>
        </tr>
        <?php
        include('connection.php');
        $select=mysqli_query($conn,"SELECT * FROM manager");
        $count=1;
        while($row=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['passsword'] ?></td>
            <td><a href="update.php?upd=<?php echo $row['managerid'] ?>">Update</a></td>
            <td><a href="delete.php?dlt=<?php echo $row['managerid'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>