<?php

$connessione = new mysqli("localhost","maurizio","matec","videodelta");

$nome = $_REQUEST["name"];
$cognome = $_REQUEST["surname"];
$email = $_REQUEST["email"];

$query = "INSERT INTO richiesta_provini(nome,cognome,email) VALUES ('$nome','$cognome','$email')";

$connessione->query($query);

if ($connessione->query($query) === TRUE) {
	echo "La tua richiesta è stata registrata!";
}
else {
	echo "Non è stato possibile registrare la tua richiesta.";
}


header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

?>