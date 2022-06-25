<h1> Editar Aluno </h1>
<br>
<?php
	$sql = "SELECT * FROM Alunos where id=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">

	<input type="hidden" name="acao" value="editar-aluno">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	
	<div class="form-outline mb-4">
	  <label>Nome</label>
	  <input type="text" id="form7Example1" name="nome" class="form-control" value="<?php print $row->nome ?>" />
	</div>
	
	<div class="form-outline mb-4">
	  <label>Numero</label>
	  <input type="number" id="form7Example2" name="numero" class="form-control" value="<?php print $row->numero ?>" />
	</div>

	<div class="form-outline mb-4">
	  <label>Turma</label>
	  <input type="text" id="form7Example3" name="turma" class="form-control" value="<?php print $row->turma ?>" />
	</div>
	
	<div class="form-outline mb-4">
	  <label>Curso</label>
	  <input type="text" id="form7Example3" name="curso" class="form-control" value="<?php print $row->curso ?>" />
	</div>
	
	<div class="mb-4">
		<button type="submit" class="btn btn-primary mb-4">Confirmar</button>
	</div>
</form>