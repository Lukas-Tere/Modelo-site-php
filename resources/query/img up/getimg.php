<?php
  include "../app.php";
 
    $PicNum = $_GET["PicNum"];
    $cn = openConnection();
    $result=mysqli_query($cn, "SELECT * FROM upload WHERE id=$PicNum") or die("Impossível executar a query "); 
    $row=mysqli_fetch_object($result); 
    Header( "Content-type: image/gif"); 
    echo $row->img; 
?>