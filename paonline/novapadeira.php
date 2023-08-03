<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Nova Padeira - PaOnline</title>
    <meta charset="UTF-8">
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
  <a href="murtosapadeiras.php"><font size="+1">Paderias em Murtosa.</font></a>
  <a href="estarrejapadeiras.php"><font size="+1">Paderias em Estarreja.</font></a>
  <a href="ovarpadeiras.php"><font size="+1">Paderias em Ovar.</font></a>
  <a href="padeiras.php"><font size="+1">Ver todas as padeiras.</font></a> 
  <a href="paos.php"><font size="+1">Ver Pãos.</font></a>
  <a href="bolos.php"><font size="+1">Ver Bolos.</font></a>
 </fieldset>

 <fieldset>
     <h2 style="color: orange"><font size="+1">Registro de nova padeira: </font></h2>
     <i>Como funciona?</i>
     <p><font size="+2">Para registrar uma nova padeira, primeiro e preciso de que mandes os detalhes precisos da padeira a nosso equipo de administradores (por agora, so eu) para que nos podamos comprobar se a padeira pode ser adicionada a nossa web. Tenha em conta que nos nao somos maquinas automatizadas e que pode que a padeira que quere adicionar demore umas horas a ums dias.</font></p>
 </fieldset>

 <fieldset>
    <h3 style="color: orange"><font size="+1">Como conseguir um link do Google Maps?</font></h3>
    <p><font size="+2">Primeiro, nos vamos ao Maps, e pesquisamos a padeira que nos queremos. Para este exemplo, eu vou a utilizar um restaurante mexicano em As Vegas, Nevada.</font></p>
    <img src="tortas.png"></img>
    <div>
    <p><font size="+2">Logo, nos damos a "Partilhar", "Incorporar um mapa", e saldra isto:</font></p>
    <img src="mapa.png"></div>
    </div>
    <div>
    <p><font size="+4">NAO copies o link, so e preciso a direcçao.</font></p>  
    <img src="direcao.png"></img>
    </div>
 </fieldset>

 <fieldset>
 	<form action="config_novapadeiras.php" method='POST'>
        <div class="form-group">
            <center><label for="nome"><font size="+2">Nome da padeira</font></label></center>
            <center><input type="text" id="nome" name="nome"></center>
        </div>
        <div class="form-group">
            <center><label for="nome"><font size="+2">Paos</font></label></center>
            <center><input type="text" id="paos" name="paos"></center>
        </div>
        <div class="form-group">
            <center><label><font size="+2">Localidade</font></label></center>
            <center><input type="radio" name="localidade" value="Murtosa">Murtosa</center>
            <center><input type="radio" name="localidade" value="Estarreja">Estarreja</center>
            <center><input type="radio" name="localidade" value="Ovar">Ovar</center>
        </div>
        <div class="form-group">
            <center><label for="padeiramap"><font size="+2">Link no Google Maps:</font></label></center>
            <center><input type="text" name="GoogleMaps" id="padeiramap"></center>
        </div>
        <center><div class="form-group">
            <button>Enviar</button>
        </div></center>
        <center><div class="form-group">
            <input type="reset" name="Apagar"></input>
        </div></center>
    </form>
 </fieldset>

</body>
</html>