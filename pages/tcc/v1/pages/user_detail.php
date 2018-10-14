<div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/bg-home1.jpg')"></div>

<div class="main main-raised profile-page">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto">
          <div class="profile">
            <div class="avatar">
              <img src="./assets/img/faces/christian.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
            </div>
            <div class="name">
              <h3 class="title">Dados Pessoais</h3>
              <a href="?page=user_form" class="btn btn-primary btn-sm">
                <i class="fa fa-edit"></i> Editar
              </a>
              <div class="row">
                <div class="col">
                  <div class="card-deck">
                    <div class="card dark">
                      <h3 class="title">Lorem User</h3>
                      <p>lorem@ipsum.com</p>
                      <p>(27) 98888-7777</p>
                      <div>
                        <a href="#" class="btn btn-just-icon btn-link text-light" title="Facebook"><i class="fa fa-facebook-official"></i></a>
                        <a href="#" class="btn btn-just-icon btn-link text-light" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
                      </div>
                    </div>
                    <div class="card dark">
                      <h4 class="title">Habilidades</h4>
                      <div class="mt-2 text-center">
                        <?php for ($j = 0; $j < rand(1,7); $j++): ?>
                          <?php include "includes/components/skill_badge.php"; ?>
                        <?php endfor; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <h3 class="title">Projetos</h3>
        <a href="?page=project_form" class="btn btn-primary btn-sm">
          <i class="fa fa-plus"></i> Criar Novo
        </a>
      </div>
      <div class="row">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="col-sm-12 col-md-6">
          <?php include "includes/components/project_box.php"; ?>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</div>
