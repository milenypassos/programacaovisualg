<?php
	include '../conecta.php';
	$titulo = strtoupper ($_POST['titulo']);
	$autor = $_POST['autor'];
	$genero = $_POST['genero'];
	$editora = $_POST['editora'];
	$paginas = $_POST['paginas'];
	$qtdeExemplares = strtoupper($_POST['qtdeExemplares']);

	$consulta = $conexao -> prepare("INSERT INTO livros (titulo,autor,genero,editora,paginas,qtdeExemplares) VALUES('$titulo','$autor','$genero','$editora','$paginas','$qtdeExemplares')");
	$consulta -> execute();
	header('Location: index.php');
?>
