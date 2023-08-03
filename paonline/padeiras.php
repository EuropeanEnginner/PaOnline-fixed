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
    <title>Padeiras - PaOnline</title>
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
  <a href="murtosapadeiras.php"><font size="+1">Paderias em Murtosa.</font></a>
  <a href="estarrejapadeiras.php"><font size="+1">Paderias em Estarreja.</font></a>
  <a href="ovarpadeiras.php"><font size="+1">Paderias em Ovar.</font></a>
  <a href="padeiras.php"><font size="+1">Ver todas as padeiras.</font></a> 
  <a href="paos.php"><font size="+1">Ver Pãos</font></a>
  <a href="bolos.php"><font size="+1">Ver Bolos</font></a>
 </fieldset>

<fieldset style="margin-top: 20px">
 	<div>
     <h2 id="murtosa"><font size="+3">Sereia do Pão. </font></h2>
     <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d654.1451842741379!2d-8.63999547781672!3d40.738405286796656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd239031451cb59f%3A0xd5957cbdf0e16967!2sSereia%20do%20P%C3%A3o!5e0!3m2!1spt-PT!2spt!4v1669206592797!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
     <p><font size="+2">Uma padeira dirigida pelo Venezolanos, podese falar espanhol aqui.</font></p>
     <strong>Paos Disponiveis</strong>
     <ul>
     	<li><font size="+1">Redondo </font></li>
     	<li><font size="+1">Broa </font></li>
        <li><font size="+1">Bicos </font></li>
     </ul>
     <strong>Bolos Disponiveis</strong>
     <ul>
      <li><font size="+1">Tarta de Maça </font></li>
      <li><font size="+1">Pastel de nata </font></li>
      <li><font size="+1">Croissant </font></li>
      <li><font size="+1">Bolo de Berlim </font></li>
     </ul> 	
 	</div>
 	<div>

 	</div>
 </fieldset>

<fieldset style="margin-top: 20px">
 	<div>
     <h2 id="estarreja"><font size="+3">Lidl Estarreja. </font></h2>
     <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12089.839447699303!2d-8.56111495!3d40.75190935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd239d5c407c83cb%3A0x59ae6cd7dfee742a!2sLidl%20Estarreja!5e0!3m2!1spt-PT!2spt!4v1669205737893!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
     <p><font size="+2">A padeira esta ao lado izquerdo, depois de entrar.</font></p>
     <strong>Paos Disponiveis</strong>
     <ul>
     	<li><font size="+1">Redondo </font></li>
     	<li><font size="+1">Barra </font></li>
     	<li><font size="+1">Broa </font></li>
     </ul>
     <strong>Bolos Disponiveis</strong>
     <ul>
      <li><font size="+1">Napolitanas </font></li>
      <li><font size="+1">Pastel de nata </font></li>
      <li><font size="+1">Croissant </font></li>
     </ul> 	
 	</div>
 	<div>

 	</div>
 </fieldset>

 <fieldset style="margin-top: 20px">
 	<div>
     <h2 id="#ovar"><font size="+3">Continente Ovar. </font></h2>
     <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1508.424480619824!2d-8.633888314207262!3d40.87518871886447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2385df238fbd93%3A0xd16ea5a69b510f0b!2sContinente%20Ovar!5e0!3m2!1spt-PT!2spt!4v1669207061563!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
     <p><font size="+2">No centro comercial Dolce Vita Ovar: Ao entrar, gire a izquierda.</font></p>
     <strong>Paos Disponiveis</strong>
     <ul>
     	<li><font size="+1">Barra </font></li>
     	<li><font size="+1">Broa </font></li>
     </ul>
     <strong>Bolos Disponiveis</strong>
     <ul>
      <li><font size="+1">Bolo de nata </font></li>
      <li><font size="+1">Croissant </font></li>
      <li><font size="+1">Napolitanas </font></li>
      <li>T<font size="+1">arta de Maça </font></li>
     </ul> 	
 	</div>
 	<div>

 	</div>
 </fieldset>

</body>
</html> 