<h1> Livros cadastrados </h1>
<?php
	$sql = "SELECT * FROM Livros";
	
	$res = $conn->query($sql);
	
	$qtd = $res->num_rows;
	
	if($qtd> 0){
		print "<table class='table table.hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>Autor</th>";
			print "<th>Editora</th>";
			print "<th>Genero</th>";
			print "<th>Disponivel</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->titulo."</td>";
			print "<td>".$row->autor."</td>";
			print "<td>".$row->editora."</td>";
			print "<td>".$row->genero."</td>";
			print "<td>".$row->disponivel."</td>";
			if ($row->disponivel=="Sim"){
				print "<td>
								<button onclick=\"location.href='?page=editar&id=".$row->id."';\"class='btn btn-success'> Editar </button>
								<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&&acao=excluir&id=".$row->id."'}else{false;};\"class='btn btn-danger'> Excluir </button>
							</td>";
				print "</tr>";
			}else{
				print "<td>
						Reservado
					  </td>";
				print "</tr>";
			}
			
		}
		print "</table>";
	}else{
		print "<p class='alert alert-danger' > Não encontrou resultados! </p>";
	}
?>