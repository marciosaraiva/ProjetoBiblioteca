<h1> Livros para reserva </h1>
<?php
	$sql = "SELECT * FROM Livros where disponivel like 'Sim'";
	
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
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->titulo."</td>";
			print "<td>".$row->autor."</td>";
			print "<td>".$row->editora."</td>";
			print "<td>".$row->genero."</td>";
			print "<td>
						<button onclick=\"location.href='?page=reservar&id=".$row->id."';\"class='btn btn-info'> Reservar </button>
						
					</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p class='alert alert-danger' > Não encontrou resultados! </p>";
	}

?>