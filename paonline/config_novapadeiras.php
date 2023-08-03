<?php


if (isset($_POST["nome"]) && (isset($_POST['paos']) && (isset($_POST['localidade']) && isset($_POST['GoogleMaps'])))) {

$nome = $_POST["nome"];
$paos = $_POST["paos"];
$localidade = $_POST["localidade"];
$padeiramap = $_POST["GoogleMaps"];

}

$host = "localhost";
$dbname = "paonline";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

echo "A conexao funciono! Pronto o nosso equipo verificara o conteudo que tu emviaste e sera adicionado a web. Esto pode tardar um tempo, entre umas houras o ums dias.";

$sql = "INSERT INTO padeiras (nome, Paos, localidade, GoogleMaps)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss",
                       $nome,
                       $paos,
                       $localidade,
                       $padeiramap);

mysqli_stmt_execute($stmt);

echo " Os Dados estao salvados, pode voltar ao Paonline fazendo click na flecha que va para a izquerda.";


?>