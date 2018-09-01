<!DOCTYPE html>
<html>
<head>
	<style>

		#teste
		{
			 position: fixed;
		  	 top: 50%;
			 left: 50%;			 
			 transform: translate(-50%, -50%);
			 border: solid; 
		}

		body
		{
			/*The image used*/ 
		    background-image: url("fundo.png");

		    /*Full height*/
		    height: 100%;

		     /*Center and scale the image nicely */
		    /*background-position: center;*/
		    background-repeat: no-repeat;
		    background-size: cover;
		}	

	</style>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<title>Cadastro de peças</title>

	<!-- inserindo barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-light" href="#">Synchro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-light" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 text-light" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>

</head>

<body>
	

	<div class="container p-3 mb-2 bg-primary text-white" id="teste">
		<form method="POST">
			<div class="row">
			<div class="form-group col-md-4 mb-3">
		    	<label for="codigo">Código da peça</label>
		    	<input type="number" class="form-control" placeholder="Digite o código da peça">
		  	</div>
		  	<div class="form-group col-md-4 mb-3">
		    	<label for="categoriaPeca">Categoria da peça</label>
		    	<select class="form-control">
		    		<option>escolha...</option>
		    		<option>teste</option>
		    		<option>teste</option>
		    		<option>teste</option>
		    		<option>teste</option>
		    	</select>
		  	</div>
		  	<div class="form-group col-md-4 mb-3">
		    	<label for="Nome">Nome da peça</label>
		    	<input type="text" class="form-control" placeholder="Digite o nome da peça">
		  	</div>
		  	<div class="form-group col-md-4 mb-3">
		    	<label for="Quantidade">Quantidade da peça</label>
		    	<input type="number" class="form-control" placeholder="Digite a quantidade de peças">
		  	</div>
		  	<div class="form-group col-md-4 mb-3">
		    	<label for="ValorUnitario">Valor unitário</label>
		    	<input type="number" class="form-control" placeholder="Digite o valor unitário da peça">
		  	</div>  	
		  	
		  	</div>
		  	<br>
		  	<div class="d-flex justify-content-between"">
  				<button type="submit" class="btn btn-primary p-3 mb-2 bg-success text-white" id="btnLimpar">Limpar</button>
		  		<button type="submit" class="btn btn-primary p-3 mb-2 bg-success text-white" id="btnCad">Cadastrar</button>
		  	</div>
		  	
		</form>
	</div>
</body>
</html>