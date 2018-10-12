<div id="navbar">
  <nav class="navbar fixed-top bg-dark navbar-expand-lg" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="./">
          <span class="text-primary font-weight-bold">PUSH YOU</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-5">
          <li class="nav-item">
            <a href="?page=projects" class="nav-link">
              Projetos
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=entrepreneurs" class="nav-link">
              Empreendedores
            </a>
          </li>
        </ul>
        <div class="navbar-nav ml-auto">
          <?php if (false): ?>
            <li class="nav-item">
              <a href="#" class="btn btn-primary btn-sm btn-raised ml-3">
                Cadastrar
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="btn btn-primary btn-sm btn-raised ml-3">
                Login
              </a>
            </li>
          <?php else: ?>
            <li class="dropdown nav-item">
              <a href="#" class="btn btn-primary btn-sm btn-raised dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="material-icons">account_circle</i> Minha Conta
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <h6 class="dropdown-header">Minha Conta</h6>
                <a href="?page=myprofile" class="dropdown-item">Meu Perfil</a>
                <a href="?page=myprojects" class="dropdown-item">Meus Projetos</a>
                <a href="#" class="dropdown-item">Configurações</a>
                <a href="#" class="dropdown-item">Sair</a>
              </div>
            </li>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
</div>