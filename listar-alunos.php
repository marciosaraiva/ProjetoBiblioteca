<h1> Alunos cadastrados </h1>
<?php
	$sql = "SELECT * FROM Alunos";
	
	$res = $conn->query($sql);
	
	$qtd = $res->num_rows;
	
	if($qtd> 0){
		print "<table class='table table.hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>Número</th>";
			print "<th>Turma</th>";
			print "<th>Curso</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->numero."</td>";
			print "<td>".$row->turma."</td>";
			print "<td>".$row->curso."</td>";
			print "<td>
							<button onclick=\"location.href='?page=editar-aluno&id=".$row->id."';\"class='btn btn-success'> Editar </button>
							<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&&acao=excluir-aluno&id=".$row->id."'}else{false;};\"class='btn btn-danger'> Excluir </button>
						</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p class='alert alert-danger' > Não encontrou resultados! </p>";
	}

?>