<?php
include('connection.php');
$delete=mysqli_query($conn,"DELETE FROM import where i_id='$_GET[dlt]'");
if($delete){
    header('location: display.php');
}
else{
    echo "not deleted";
}
?>