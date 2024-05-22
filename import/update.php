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
    $select=mysqli_query($conn,"SELECT * FROM import where i_id='$_GET[upd]'");
    $row=mysqli_fetch_array($select);
    ?>
    <form action="" method="post">
        <label for="">Food_id</label><br>
        <input type="number" name="foodid" id="" value="<?php echo $row['foodid'] ?>"><br><br>
        <label for="">importdate</label><br>
        <input type="date" name="date" id="" value="<?php echo $row['importdate'] ?>"><br><br>
        <label for="">Food_id</label><br>
        <input type="number" name="quantity" id="" value="<?php echo $row['quantity'] ?>"><br><br>
        <button name="submit">Add new</button>
        <button><a href="display.php">Cancel</a></button>
    </form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['submit'])){
    $update=mysqli_query($conn,"UPDATE import SET foodid='$_POST[foodid]', importdate='$_POST[date]', quantity='$_POST[quantity]' where i_id='$_GET[upd]' ");
    if($update){
        header('location: display.php');
    }
    else{
        echo "Not inserted";
    }
}
?>