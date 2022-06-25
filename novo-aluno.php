<h1> Novo Aluno </h1>
<br>
<form action="?page=salvar" method="POST">

	<input type="hidden" name="acao" value="cadastrar-aluno">
	
	<div class="form-outline mb-4">
	  <label>Nome</label>
	  <input type="text" id="form7Example1" name="nome" class="form-control" />
	</div>
	
	<div class="form-outline mb-4">
	  <label>Numero</label>
	  <input type="number" id="form7Example2" name="numero" class="form-control" />
	</div>

	<div class="form-outline mb-4">
	  <label>Turma</label>
	  <input type="text" id="form7Example3" name="turma" class="form-control" />
	</div>
	
	<div class="form-outline mb-4">
	  <label>Curso</label>
	  <input type="text" id="form7Example3" name="curso" class="form-control" />
	</div>
	
	<div class="mb-4">
		<button type="submit" class="btn btn-primary mb-4">Confirmar</button>
	</div>
</form>