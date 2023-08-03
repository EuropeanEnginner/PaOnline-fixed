<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;

}    
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bolos - PaOnline</title>
    <style>
        fieldset {background-color: grey;}
        div.le {text-align: left;} 
        div.ri {text-align: right;}
    </style>
</head>
<body style="background-image: url('paorico.png')">

<a href="welcome.php">
    <center><img src="logoP.jpg" style="top"></center>
    </a> 

 <fieldset>
 	<a href="welcome.php"><font size="+1">Voltar ao inicio.</font></a>
    <a href="tdm.php"><font size="+1">Tarta de Maçã.</font></a></li>
    <a href="pdn.php"><font size="+1">Pastel de Nata.</font></a></li>
    <a href="crt.php"><font size="+1">Croissant.</font></a></li>
    <a href="bdm.php"><font size="+1">Bolo de Berlim</font></a></li>
    <a href="paos.php"><font size="+1">Ver Pãos</font></a>
    <a href="padeiras.php"><font size="+1">Ver Padeiras</font></a>
 </fieldset>

<fieldset style="margin-top: 20px">
    <div>
     <h2><font size="+2">Napolitanas.</font></h2>
     <img src="napolitana.png" style="float: right"> </img>
         <p style="color: orange"><font size="+1">Uma saludavel dosis compactada de chocolate, rodeada de uma coisa tambem comestivel.</font></p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="ovarpadeiras.php"><font size="+2">Continente Ovar - Ovar.</font></a></li>
            <li><a href="estarrejapadeiras.php"><font size="+2">Lidl Estarreja - Estarreja.</font></a></li>
         </ul>
    </div>
 </fieldset>

</body>
</html>