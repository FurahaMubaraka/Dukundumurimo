<?php
include('connection.php');
$insert=mysqli_query($conn,"SELECT * FROM manager where username='$_POST[username]' AND passsword='$_POST[password]'");
$check=mysqli_fetch_array($insert);
if($check){
    header('location: index.php');
}
else{
    echo "Not found";
}
?>