  <?php
 $cn = openConnection();
    $ida =1;
    $idb =2;
    $idc =3;
    $idd =4;
    $ide =5;
    $idf =6;




    if($ida == $ida){
    $result=mysqli_query($cn, "SELECT * FROM upload WHERE id =$ida") or die("Impossível executar a query"); 
    if(mysqli_num_rows($result)> 0){
        $resultadoA = mysqli_fetch_assoc($result);
        $titleA = $resultadoA['titulo'];
        $textoA = $resultadoA['texto'];
    }
    }
    if($idb == $idb){
    $result=mysqli_query($cn, "SELECT * FROM upload WHERE id =$idb") or die("Impossível executar a query"); 
    if(mysqli_num_rows($result)> 0){
        $resultadoB = mysqli_fetch_assoc($result);
        $titleB = $resultadoB['titulo'];
        $textoB = $resultadoB['texto'];
    }
    }
    if($idc == $idc){
    $result=mysqli_query($cn, "SELECT * FROM upload WHERE id =$idc") or die("Impossível executar a query"); 
    if(mysqli_num_rows($result)> 0){
        $resultadoC = mysqli_fetch_assoc($result);
        $titleC = $resultadoC['titulo'];
        $textoC = $resultadoC['texto'];
    }
    }
    if($idd == $idd){
    $result=mysqli_query($cn, "SELECT * FROM upload WHERE id =$idd") or die("Impossível executar a query"); 
    if(mysqli_num_rows($result)> 0){
        $resultadoD = mysqli_fetch_assoc($result);
        $titleD = $resultadoD['titulo'];
        $textoD = $resultadoD['texto'];
    }
    }
    if($idb == $idb){
    $result=mysqli_query($cn, "SELECT * FROM upload WHERE id =$ide") or die("Impossível executar a query"); 
    if(mysqli_num_rows($result)> 0){
        $resultadoE = mysqli_fetch_assoc($result);
        $titleE = $resultadoE['titulo'];
        $textoE = $resultadoE['texto'];
    }
    }
    if($idc == $idc){
    $result=mysqli_query($cn, "SELECT * FROM upload WHERE id =$idf") or die("Impossível executar a query"); 
    if(mysqli_num_rows($result)> 0){
        $resultadoF = mysqli_fetch_assoc($result);
        $titleF = $resultadoF['titulo'];
        $textoF = $resultadoF['texto'];
    }
    }
?>