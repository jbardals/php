<?php
    session_name("AMiñaSesion");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title></title>
    </head>
    <body> 
<?php
    $marMod=(isset($_SESSION["marcaModelo"]))
    ?$_SESSION["marcaModelo"]
    :"";
    
    $nKm=(isset($_SESSION["numKm"]))
    ?$_SESSION["numKm"]
    :"";
    
    $url=(isset($_SESSION["urlFabricante"]))
    ?$_SESSION["urlFabricante"]
    :"";
    
    $com=(isset($_SESSION["combustible"]))
    ?$_SESSION["urlFabricante"]
    :"";  
    
    $eqEx=(isset($_SESSION["equipEx"]))
    ? $_SESSION["equipEx"]
    : array();    
    echo "<p>Os valores contidos na sesión son:</p>";        
    echo "<p>Marca e modelo: ".$marMod."</p>";
    echo "<p>Nº km: ".$nKm."</p>";    
    echo "<p>URL do fabricante: ".$url."</p>";
    echo "<p>Combustible: ".$com."</p>";
    echo "<p>Equipamento extra: ";
    for ($i=0; $i<count($eqEx); $i++){
        echo $eqEx[$i];
        if ($i==(count($eqEx)-1))
            echo ".";
        else
            echo ", ";
    }
    echo "</p>";    
?>
    </body>
</html>