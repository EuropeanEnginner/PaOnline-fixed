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
    <title>Pãos - PaOnline</title>
    <script src="https://polyfill.io/pollyfill.min.js?feature=default"></script>
    <style>
        fieldset {background-color: grey;}
    </style>
</head>
<body style="background-image: url('paorico.png')">

<a href="welcome.php">
    <center><img src="logoP.jpg" style="top"></center>
    </a>

 <fieldset>
 	<a href="welcome.php"><font size="+1">Voltar ao inicio.</font></a>
 	<a href="redondo.php"><font size="+1">Paos redondos.</font></a>
 	<a href="barra.php"><font size="+1">Paos de barra.</font></a>
    <a href="broa.php"><font size="+1">Paos de broa.</font></a>
    <a href="bico.php"><font size="+1">Paos de bicos.</font></a>
    <a href="padeiras.php"><font size="+1">Ver Padeiras</font></a>
    <a href="bolos.php"><font size="+1">Ver Bolos</font></a>
 </fieldset>	

 <fieldset style="margin-top: 20px">
 	<div>
     <h2 id="pao1" style="color: orange">PÃO DESTACADO: </h2><h2>Redondo.</h2>
     <img src="e110.5.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+1">O classico pao redondo, tem um tamanho e formação ergonomico, sendo assim possivel ter um aggare forte mentras que o usuario consume o pão.</font></p>
         <strong><font size="+2">DISPONIVEL EM:</font></strong>
         <ul>
            <li><a href="estarrejapadeiras.php"><font size="+2"> Lidl - Estarreja.</font></a></li>
            <li><a href="murtosapadeiras.php"><font size="+2"> Sereira do Pão - Murtosa </font></a></li>
         </ul>
 	</div>
 </fieldset>

    <fieldset style="margin-top: 20px">
    <div>
      <h2 id="pao2">Barra.</h2>
     <img src="barra.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+2">Estilo clasico de barra de pao. Podese tamben ser usada como uma espada se fica sem comer por 4 dias.</font></p>
         <strong><font size="+2">DISPONIVEL EM:</font></strong>
         <ul>
            <li><a href="estarrejapadeiras.php"><font size="+2"> Lidl - Estarreja.</font></a></li>
            <li><a href="ovarpadeiras.php"><font size="+2"> Continente Ovar - Ovar.</font></a></li>
         </ul> 
    </div>
    </fieldset>

<fieldset style="margin-top: 20px">
    <div>
      <h2 id="pao3"><font size="+2">Broa.</font></h2>
     <img src="broa.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+2">Normalment feita com milho, e usual combinada com vinho tinto para fazer "sopinhas de vinho".</font></p>
         <strong><font size="+2">DISPONIVEL EM:</font></strong>
         <ul>
            <li><a href="murtosapadeiras.php"><font size="+2"> Sereira do Pão - Murtosa</font></a></li>
            <li><a href="estarrejapadeiras.php"><font size="+2"> Lidl - Estarreja.</font></a></li>
            <li><a href="ovarpadeiras.php"><font size="+2"> Continente Ovar - Ovar.</font></a></li>
         </ul> 
    </div>
    </fieldset>

<fieldset style="margin-top: 20px">
    <div>
      <h2 id="pao4"><font size="+2">Bicos.</font></h2>
     <img src="BICO.png" style="float: right"> </img>
         <p style="color: orange"><font size="+2">São comos os paos redondos, mas em miniatura. O seu tamanha compactos os fazem capaces de ser transportados em bolsos geralmente medianos.</font></p>
         <strong><font size="+2">DISPONIVEL EM:</font></strong>
         <ul>
            <li><a href="murtosapadeiras.php"><font size="+2"> Sereira do Pão - Murtosa</font></a></li>
         </ul> 
    </div>
    </fieldset>


</body>
</html>