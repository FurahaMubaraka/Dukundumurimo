<?php
include('connection.php');

if(isset($_POST['submit'])){
    $insert=mysqli_query($conn,"INSERT INTO manager values('','$_POST[username]','$_POST[password]')");
    if($insert){
        header('location: display.php');
    }
    else{
        echo "not inserted";
    }
}
?>