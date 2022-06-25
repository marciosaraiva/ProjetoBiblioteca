<h1> Novo Livro </h1>
<br>
<form action="?page=salvar" method="POST">

	<input type="hidden" name="acao" value="cadastrar">
	
	<div class="form-outline mb-4">
	  <label>Titulo</label>
	  <input type="text" id="form7Example1" name="titulo" class="form-control" />
	</div>
	
	<div class="form-outline mb-4">
	  <label>Autor(a)</label>
	  <input type="text" id="form7Example2" name="autor" class="form-control" />
	</div>

	<div class="form-outline mb-4">
	  <label>Editora</label>
	  <input type="text" id="form7Example3" name="editora" class="form-control" />
	</div>
	
	<div class="form-outline mb-4">
		<label class="visually-hidden" for="inlineFormSelectPref">Gênero</label><br>
		<select class="select" name="genero">
		  <option value="Fantasia">Fantasia</option>
		  <option value="Ação">Ação</option>
		  <option value="Romance">Romance</option>
		  <option value="Humor">Humor</option>
		  <option value="Suspence">Suspence</option>
		  <option value="Aventura">Aventura</option>
		  <option value="Drama">Drama</option>
		  <option value="Poema">Poema</option>
		</select>
	</div>
	<div class="mb-4">
		<button type="submit" class="btn btn-primary mb-4">Confirmar</button>
	</div>
</form>