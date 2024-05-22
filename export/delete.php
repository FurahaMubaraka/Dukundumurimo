<?php
include('connection.php');
$delete=mysqli_query($conn,"DELETE FROM export where e_id='$_GET[dlt]'");
if($delete){
    header('location: display.php');
}
else{
    echo "Not deleted";
}
?>