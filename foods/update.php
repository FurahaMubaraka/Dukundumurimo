<?php 
include('connection.php');
$select=mysqli_query($conn,"SELECT * FROM foods where foodid='$_GET[upd]'");
$row=mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Food_name</label><br>
        <input type="text" name="name" id="" value="<?php echo $row['food_name'] ?>"><br><br>
        <label for="">Food_Ownername</label><br>
        <input type="text" name="owner" id="" value="<?php echo $row['food_ownername'] ?>"><br><br>
        <button name="submit">Add Food</button>
        <button><a href="display.php">Cancel</a></button>
    </form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['submit'])){
    $update=mysqli_query($conn,"UPDATE foods SET food_name='$_POST[name]',food_ownername='$_POST[owner]' where foodid='$_GET[upd]'");
    if($update){
        header('location: display.php');
    }
    else{
        echo "Not updated";
    }
}
?>