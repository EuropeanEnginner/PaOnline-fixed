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
    <a href="npt.php"><font size="+1">Napolitanas.</font></a></li>
    <a href="bdm.php"><font size="+1">Bolo de Berlim</font></a></li>
    <a href="paos.php"><font size="+1">Ver Pãos</font></a>
    <a href="padeiras.php"><font size="+1">Ver Padeiras</font></a>
 </fieldset>

 <fieldset style="margin-top: 20px">
 	<div>
     <h2><font size="+2">Tarta de Maça.</font></h2>
     <img src="tortadm.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+1">Pode que não selha precisamente para comer no almoço do trabalho, mas sempre estara na tua casa, esperando pacientemente.</font></p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="murtosapadeiras.php"><font size="+2">Sereira do Pão - Murtosa.</font></a></li>
            <li><a href="ovarpadeiras.php"><font size="+2">Continente Ovar - Ovar.</font></a></li>
         </ul>
 	</div>
 </fieldset>
 <fieldset style="margin-top: 20px">
 	<div>
     <h2>P<font size="+2">Pastel de Nata.</font></h2>
     <img src="cx.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+1">O melhor pastel de todo o universo, diz-se que comer um ao dia date um dia mais de vida.</font></p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="murtosapadeiras.php"><font size="+2">Sereira do Pão - Murtosa.</font></a></li>
            <li><a href="estarrejapadeiras.php"><font size="+2">Lidl Estarreja - Estarreja.</font></a></li>
         </ul>
 	</div>
 </fieldset>
  <fieldset style="margin-top: 20px">
    <div>
     <h2><font size="+2">Croissant.</font></h2>
     <img src="original.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+1">Nao recomendado para as persoas que ainda apreciem a sua patria.</font></p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="ovarpadeiras.php"><font size="+2">Continente Ovar - Ovar.</font></a></li>
            <li><a href="estarrejapadeiras.php"><font size="+2">Lidl Estarreja - Estarreja.</font></a></li>
            <li><a href="murtosapadeiras.php"><font size="+2">Sereira do Pão - Murtosa.</font></a></li>
         </ul>
    </div>
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
   <fieldset style="margin-top: 20px">
    <div>
     <h2><font size="+2">Bolo de Berlim.</font></h2>
     <img src="transferir.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+1">Uma vez, uma padeira portuguesa foi para a Alemanha com so a sua pala. Quando ela vontou, traia dois de estos bolos; Um no bolso, e outro na boca.</font></p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="murtosapadeiras.php"><font size="+2">Sereira do Pão - Murtosa.</font></a></li>
         </ul>
    </div>
 </fieldset>

</body>
</html>