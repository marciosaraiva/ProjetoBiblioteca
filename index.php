<!doctype html>
<html lang="pt-pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="icon" type="image/png" href="imagens/bibliotecaIcon.png">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	
    <title>Biblioteca</title>
  </head>
  <body>
	<div class="navbar navbar-expand-lg navbar-light bg-light">
	
		  <div class="navbar-header">
			  <a class="navbar-brand" href="#">
				<img src="imagens/bibliotecaIcon.png" width="30" height="30" class="d-inline-block align-top" alt="">
				Biblioteca Escolar
			  </a>
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="navbar-toggler-icon"></span>
			  </button>
		  </div>
		  
		  <div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav">
			  <li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="?page=novo">Novo Livro</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="?page=novo-aluno">Novo Aluno</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="?page=listar">Listar Livros</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="?page=listar-alunos">Listar Alunos</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="?page=listar-disponiveis">Reservar Livro</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="?page=listar-indisponiveis">Devolver Livro</a>
			  </li>
			</ul>
		  </div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col mt-5">
				<?php
					include("config.php");
					switch(@$_REQUEST["page"]){
						case "novo":
							include("novo-livro.php");
						break;
						case "novo-aluno":
							include("novo-aluno.php");
						break;
						case "listar":
							include("listar-livros.php");
						break;
						case "listar-alunos":
							include("listar-alunos.php");
						break;
						case "salvar":
							include("salvar.php");
						break;
						case "editar":
							include("editar-livro.php");
						break;
						case "editar-aluno":
							include("editar-aluno.php");
						break;
						case "listar-disponiveis":
							include("listar-disponiveis.php");
						break;
						case "listar-indisponiveis":
							include("listar-indisponiveis.php");
						break;
						case "reservar":
							include("reservar-livro.php");
						break;
						case "devolver":
							include("devolver-livro.php");
						break;
						default:
							print "<h1>Bem vindo</h1> <br><br>";
							print "<center><iframe width='560' height='315' src='https://www.youtube.com/embed/yyTIMdjd34I' title='Visita à Biblioteca' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe><br><br><br><br><br>";
							print " © Desenvolvido por Márcio Saraiva - 06/2022</center>";
					}
				?>
			</div>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>