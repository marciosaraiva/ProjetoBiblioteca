<?php
	switch ($_REQUEST["acao"]){
		case "cadastrar":
			$titulo = $_POST["titulo"];
			$autor = $_POST["autor"];
			$editora = $_POST["editora"];
			$genero = $_POST["genero"];
			
			$sql = "INSERT into Livros(titulo, autor, editora, genero, disponivel)
						values ('{$titulo}', '{$autor}', '{$editora}', '{$genero}' , 'Sim')";
			
			$res = $conn->query($sql);
			
			if($res==True){
				print "<script>alert('Cadastro com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";				
			}else{
				print "<script>alert('Não foi possivel cadastrar');</script>";
				print "<script>location.href='?page=listar';</script>";				
			}
			
			break;
		
		case "cadastrar-aluno":
			$nome = $_POST["nome"];
			$numero = $_POST["numero"];
			$turma = $_POST["turma"];
			$curso = $_POST["curso"];
			
			$sql = "INSERT into Alunos(nome, numero, turma, curso)
						values ('{$nome}', '{$numero}', '{$turma}', '{$curso}')";
			
			$res = $conn->query($sql);
			
			if($res==True){
				print "<script>alert('Cadastro com sucesso');</script>";
				print "<script>location.href='?page=listar-alunos';</script>";				
			}else{
				print "<script>alert('Não foi possivel cadastrar');</script>";
				print "<script>location.href='?page=listar-alunos';</script>";				
			}
			
			break;
		
		case "editar":
			$titulo = $_POST["titulo"];
			$autor = $_POST["autor"];
			$editora = $_POST["editora"];
			$genero = $_POST["genero"];
			
			$sql = "UPDATE Livros SET 
						titulo='{$titulo}', 
						autor='{$autor}', 
						editora='{$editora}', 
						genero='{$genero}'
					WHERE
						id=".$_REQUEST["id"];
			
			$res = $conn->query($sql);
					
			if($res==True){
				print "<script>alert('Editado com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";				
			}else{
				print "<script>alert('Não foi possivel editar');</script>";
				print "<script>location.href='?page=listar';</script>";				
			}
			
			break;
			
		case "editar-aluno":
			$nome = $_POST["nome"];
			$numero = $_POST["numero"];
			$turma = $_POST["turma"];
			$curso = $_POST["curso"];
			
			$sql = "UPDATE Alunos SET 
						nome='{$nome}', 
						numero='{$numero}', 
						turma='{$turma}', 
						curso='{$curso}'
					WHERE
						id=".$_REQUEST["id"];
			
			$res = $conn->query($sql);
					
			if($res==True){
				print "<script>alert('Editado com sucesso');</script>";
				print "<script>location.href='?page=listar-alunos';</script>";				
			}else{
				print "<script>alert('Não foi possivel editar');</script>";
				print "<script>location.href='?page=listar-alunos';</script>";				
			}
			
			break;
		
		case "excluir":
			$sql = "DELETE from Livros WHERE id=".$_REQUEST["id"];
			
			$res = $conn->query($sql);
					
			if($res==True){
				print "<script>alert('Excluído com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";				
			}else{
				print "<script>alert('Não foi possivel excluir');</script>";
				print "<script>location.href='?page=listar';</script>";				
			}
			
		break;
		
		case "excluir-aluno":
			$sql = "DELETE from Alunos WHERE id=".$_REQUEST["id"];
			
			$res = $conn->query($sql);
					
			if($res==True){
				print "<script>alert('Excluído com sucesso');</script>";
				print "<script>location.href='?page=listar-alunos';</script>";				
			}else{
				print "<script>alert('Não foi possivel excluir');</script>";
				print "<script>location.href='?page=listar-alunos';</script>";				
			}
			
		break;
		
		case "reservar-livro":
			$id_livro = $_POST["id_livro"];
			$id_aluno = $_POST["id_aluno"];
			$data_entrega = $_POST["data_entrega"];
			$data_de_devolucao = $_POST["data_de_devolucao"];
					
			if ($data_entrega >= $data_de_devolucao){
				print "<script>alert('A data de devolução deve ser depois da data de entrega');</script>";
				print "<script>location.href='?page=listar-disponiveis';</script>";	
			}else{			
				$sql = "INSERT into LivrosxAlunos(id_livro, id_aluno, data_entrega, data_de_devolucao)
							values ('{$id_livro}', '{$id_aluno}', '{$data_entrega}', '{$data_de_devolucao}')";
							
				$res = $conn->query($sql);
				
				if($res==True){ 
					$sql = "UPDATE Livros SET 
								disponivel = 'Não'
							WHERE
								id='{$id_livro}'";
					
					$res = $conn->query($sql);
					
					if($res==True){
						print "<script>alert('Reservado com sucesso');</script>";
						print "<script>location.href='?page=listar-disponiveis';</script>";				
					}else{
						print "<script>alert('Não foi possivel reservar o livro');</script>";
						print "<script>location.href='?page=listar-disponiveis';</script>";				
					}
					
				}else{
					print "<script>alert('Não foi possivel reservar o livro');</script>";
					print "<script>location.href='?page=listar-disponiveis';</script>";				
				}
			}
		
		case "devolver":
			$sql = "DELETE from LivrosxAlunos WHERE id_livro=".$_REQUEST["id"];
		
			$res = $conn->query($sql);
					
			if($res==True){ 
				$sql = "UPDATE Livros SET 
							disponivel = 'Sim'
						WHERE
							id=".$_REQUEST["id"];
				
				$res = $conn->query($sql);
				
				if($res==True){
					print "<script>alert('Devolvido com sucesso');</script>";
					print "<script>location.href='?page=listar-indisponiveis';</script>";				
				}else{
					print "<script>alert('Não foi possivel devolver o livro');</script>";
					print "<script>location.href='?page=listar-indisponiveis';</script>";				
				}
				
			}else{
				print "<script>alert('Não foi possivel devolver o livro');</script>";
				print "<script>location.href='?page=listar-indisponiveis';</script>";				
			}
		
	}

?>