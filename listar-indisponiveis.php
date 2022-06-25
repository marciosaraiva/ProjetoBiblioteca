<h1> Livros para devolução </h1>
<?php
	$sql = "SELECT * FROM Livros where disponivel like 'Não'";
	
	$sql2 = "SELECT * FROM livrosxalunos";
	
	$res = $conn->query($sql);
	
	$res2 = $conn->query($sql2);
	
	$qtd = $res->num_rows;
	
	if($qtd> 0){
		print "<table class='table table.hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>Id_Livro</th>";
			print "<th>Id_aluno</th>";
			print "<th>Data da entrega</th>";
			print "<th>Data da devolução</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_object()){
			$row2 = $res2->fetch_object();
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row2->id_aluno."</td>";
			print "<td>".$row2->data_entrega."</td>";
			print "<td>".$row2->data_de_devolucao."</td>";
			print "<td>
					<button onclick=\"location.href='?page=salvar&acao=devolver&id=".$row->id."';\"class='btn btn-warning'> Devolver </button>
				</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p class='alert alert-danger' > Não encontrou resultados! </p>";
	}

?>