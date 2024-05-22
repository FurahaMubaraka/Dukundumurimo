<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
</head>
<body>
    <?php
    include('connection.php');
    $select=mysqli_query($conn,"SELECT * FROM manager where managerid='$_GET[upd]'");
    $row=mysqli_fetch_array($select);
    ?>
    <form action="" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username" id="" value="<?php echo $row['username']?>"><br><br>
        <label for="">Password</label><br>
        <input type="text" name="password" id="" value="<?php echo $row['passsword']?>"><br><br>
        <button name="submit">update new</button>
        <button><a href="display.php">Cancel</a></button>
    </form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['submit'])){
    $update=mysqli_query($conn,"UPDATE manager SET username='$_POST[username]',passsword='$_POST[password]' where managerid='$_GET[upd]'");
    if($update){
        header('location: display.php');
    }
    else{
        echo "Not updated";
    }
}
?>