<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include('connection.php');
    $select=mysqli_query($conn,"SELECT * FROM export where e_id='$_GET[upd]'");
    $row=mysqli_fetch_array($select);
    ?>
    <form action="" method="post">
        <label for="">Food_id</label><br>
        <input type="number" name="foodid" id="" value="<?php echo $row['foodid'] ?>"><br><br>
        <label for="">ExportDate</label><br> 
        <input type="date" name="date" id="" value="<?php echo $row['exportdate'] ?>"><br><br>
        <label for="">Quantity</label><br>
        <input type="number" name="quantity" id="" value="<?php echo $row['quantity'] ?>"><br><br>
        <button name="submit">Add New</button>
        <button><a href="display.php">Cancel</a></button>
    </form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['submit'])){
    $update=mysqli_query($conn,"UPDATE export SET foodid='$_POST[foodid]',exportdate='$_POST[date]',quantity='$_POST[quantity]' where e_id='$_GET[upd]'");
    if($update){
        header('location: display.php');
    }
    else{
        echo "Not updated";
    }
}
?>