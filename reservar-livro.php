<h1> Reservar </h1>
<br>
<form action="?page=salvar" method="POST">

	<input type="hidden" name="acao" value="reservar-livro">
	
	<div class="form-outline mb-4">
	  <label>ID do Livro</label>
	  <input type="text" id="form7Example1" name="id_livro" class="form-control" value="<?php print $_REQUEST["id"] ?>"/>
	</div>
	
	<div class="form-outline mb-4">
	  <label>ID do Aluno</label>
	  <input type="text" id="form7Example1" name="id_aluno" class="form-control" />
	</div>
	
	<div class="form-outline mb-4">
	  <label>Data da entrega</label>
	  <input type="date" id="form7Example2" name="data_entrega" class="form-control" />
	</div>

	<div class="form-outline mb-4">
	  <label>Data de devolução</label>
	  <input type="date" id="form7Example3" name="data_de_devolucao" class="form-control" />
	</div>
		
	<div class="mb-4">
		<button type="submit" class="btn btn-primary mb-4">Confirmar</button>
	</div>
</form>