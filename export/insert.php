<?php
include('connection.php');
if(isset($_POST['submit'])){
    $insert=mysqli_query($conn,"INSERT INTO export values('','$_POST[foodid]','$_POST[date]','$_POST[quantity]')");
    if($insert){
        header('location: display.php');
    }else{
        echo "Not inserted";
    }
}
?>