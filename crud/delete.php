<?php
include "readconnect.php"; 
$id=$_GET['id']; 
echo var_dump($id); 
$sql=mysqli_query($conn,"DELETE FROM datatable WHERE id='$id'"); 
 
    if($sql) 
    { 
        echo '<script> alert("deleted sucessfully");window.location.href="read1.php";</script>'; 
    } 
    else{ 
        echo '<script> alert("something went wrong");</script>'; 
 
    } 
 
 
 
 
 
?>