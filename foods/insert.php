<?php
include('connection.php');
if(isset($_POST['submit'])){
    $insert=mysqli_query($conn,"INSERT INTO foods values('','$_POST[name]','$_POST[owner]')");
    if($insert){
        header('location: display.php');
    }
    else{
        echo "Not inserted";
    }
}
?>