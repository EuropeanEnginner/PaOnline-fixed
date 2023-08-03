<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PaOnline</title>
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
    <div.le><fieldset><h3><font size="+3">Actualmente na conta de: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></font></b></h3></fieldset></div.le>
    <div.ri><fieldset><p>
        <a href="reset-password.php" ><font size="+2">Resetear a senha.</font></a>
        <a href="logout.php" ><font size="+2">Sair da conta.</font></a>
        <a href="novapadeira.php" ><font size="+2">Registrar uma nova padeira.</font></a>
    </p></fieldset></div.ri>
</head>
<body>
 
    <div>
        
        <fieldset style="margin-top: 5px">
         <h1 style="color: orange">Pao Destacado!</h1>
         <img src="e110.5.jpg" style="float: right"> </img>
         <p style="color: orange"><font size="+1">O classico pao redondo, tem um tamanho e formação ergonomico, sendo assim possivel ter um aggare forte mentras que o usuario consume o pão.</font></p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="estarrejapadeiras.php"><font size="+2"> Lidl - Estarreja.</font></a></li>
            <li><a href="murtosapadeiras.php"><font size="+2"> Sereira do Pão - Murtosa </font></a></li>
         </ul>
        </fieldset>    
        <fieldset style="margin-left: 810px">
         <h1><font size="+3">Paderias por separado:</font></h1>
         <a href="padeiras.php"><font size="+2">Ver todas as paderias.</font></a>
         <ul>
            <li><a href="estarrejapadeiras.php"><font size="+1">Em Estarreja</font></a></li>
            <li><a href="ovarpadeiras.php"><font size="+1">Em Ovar</font></a></li>
            <li><a href="murtosapadeiras.php"><font size="+1">Em Murtosa</font></a></li>
         </ul>
        </fieldset>
        <fieldset style="margin-right: 810px">
         <h1><font size="+3">Paos:</font></h1>
         <a href="paos.php"><font size="+2">Ver todos os pãos.</font></a>
         <ul>
            <li><a href="redondo.php"><font size="+1">Redondos</font></a></li>
            <li><a href="barra.php"><font size="+1">Barra</font></a></li>
            <li><a href="broa.php"><font size="+1">Broa</font></a></li>
            <li><a href="bico.php"><font size="+1">Bicos</font></a></li>
         </ul>
        </fieldset>
        <fieldset style="margin-right: 810px">
         <h1><font size="+3">Bolos:</font></h1>
         <a href="bolos.php"><font size="+2">Ver todos os bolos.</font></a>
         <ul>
            <li><a href="tdm.php"><font size="+1">Tarta de Maçã</font></a></li>
            <li><a href="pdn.php"><font size="+1">Pastel de Nata</font></a></li>
            <li><a href="crt.php"><font size="+1">Croissant</font></a></li>
            <li><a href="npt.php"><font size="+1">Napolitanas</font></a></li>
            <li><a href="bdm.php"><font size="+1">Bolo de Berlim</font></a></li>
         </ul>
        </fieldset>

    </div>
</body>
</html>