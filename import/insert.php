<?php
include('connection.php');
if(isset($_POST['submit'])){
    $insert=mysqli_query($conn,"INSERT INTO import value('','$_POST[foodid]','$_POST[date]','$_POST[quantity]')");
    if($insert){
        header('location: display.php');
    }else{
        echo "not inserted";
    }
}
?>