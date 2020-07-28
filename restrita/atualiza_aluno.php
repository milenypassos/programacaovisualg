<?php
include '../conecta.php';
$ra = $_GET['ra'];
//echo $ra;

$nome = $_POST['nome'];
$email = $_POST['email'];
$dataNascimento = $_POST['nascimento'];
$celular = $_POST['celular'];
$telefone = $_POST['telefone'];

//echo "$email<br>";
//echo "$dataNascimento<br>";
//echo "$celular<br>";
//echo "$telefone<br>";

$consulta = $conexao -> prepare("UPDATE aluno SET nome='$nome',email='$email', dataNascimento='$nascimento', celular = 'celular', tel = '$telefone' WHERE ra='$ra' ");
$consulta -> execute();
header('Location: index.php');
?>