<!-- criando barra de navegação para include em telas -->

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-light"><img src="img/logo.png" width="30" height="30" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Login <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pessoa Física
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Cadastro de pessoa física</a>
          <a class="dropdown-item" href="#">Listagem de pessoa Física</a>
        </div>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pessoa Jurídica
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Cadastro de pessoa jurídica</a>
          <a class="dropdown-item" href="#">Listagem de pessoa jurídica</a>
        </div>
        <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Serviço
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Cadastro de serviço</a>
          <a class="dropdown-item" href="#">Listagem de serviços</a>
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