<?php
include "../app.php";
 $cn = openConnection();
$result=mysqli_query($cn, "SELECT * FROM upload") or die("Impossível executar a query"); 
 
while($row=mysqli_fetch_object($result)) { 
    echo "<img src='getimg.php?PicNum=$row->id' \">"; 
} 
 
?>
