<?php 
include('connection.php');
$delete=mysqli_query($conn,"DELETE FROM foods where foodid='$_GET[dlt]'");
if($delete){
    header('location: display.php');
}
else{
    echo "Not deleted";
}
?>