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
    <a href="barra.php"><font size="+1">Paos de barra.</font></a>
    <a href="broa.php"><font size="+1">Paos de broa.</font></a>
    <a href="bico.php"><font size="+1">Paos de bicos.</font></a>
    <a href="padeiras.php"><font size="+1">Ver Padeiras</font></a>
    <a href="bolos.php"><font size="+1">Ver Bolos</font></a>
 </fieldset>	

<fieldset style="margin-top: 20px">
    <div>
     <h2>Redondo.</h2>
     <img src="e110.5.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+1">O classico pao redondo, tem um tamanho e formação ergonomico, sendo assim possivel ter um aggare forte mentras que o usuario consume o pão.</font></p>
         <strong><font size="+2">DISPONIVEL EM:</font></strong>
         <ul>
            <li><a href="estarrejapadeiras.php"><font size="+2"> Lidl - Estarreja.</font></a></li>
            <li><a href="murtosapadeiras.php"><font size="+2"> Sereira do Pão - Murtosa </font></a></li>
         </ul>
    </div>
 </fieldset>

 </body>
</html>