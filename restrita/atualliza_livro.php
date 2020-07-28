<?php
include '../conecta.php';
$codlivro = $_GET['codlivro'];
//echo $codlivro;
//echo "<br>";

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$paginas = $_POST['paginas'];
$qtdeExemplares = $_POST['qtdeExemplares'];




//echo "$titulo<br>";
//echo "$autor<br>";
//echo "$editora<br>";
//echo "$paginas<br>";

$consulta = $conexao -> prepare("UPDATE livros SET titulo='$titulo',autor='$autor', genero = '$genero',editora='$editora', paginas = '$paginas', qtdeExemplares='$qtdeExemplares' WHERE codlivro='$codlivro' ");
$consulta -> execute();
header('Location: index.php');
?>