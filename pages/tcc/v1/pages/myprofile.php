<div class="main main-raised profile-page">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile">
            <div class="avatar">
              <img src="./assets/img/faces/christian.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
            </div>
            <div class="name">
              <h3 class="title">Christian Louboutin</h3>
              <h6>Designer</h6>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-2 text-center">
        <?php for ($j = 0; $j < rand(1,7); $j++): ?>
          <?php if ($j == 0): ?> <h6 class="badge badge-pill badge-primary">+ PHP</h6>          <?php endif; ?>
          <?php if ($j == 1): ?> <h6 class="badge badge-pill badge-secondary">+ Laravel</h6>    <?php endif; ?>
          <?php if ($j == 2): ?> <h6 class="badge badge-pill badge-info">+ HTML</h6>            <?php endif; ?>
          <?php if ($j == 3): ?> <h6 class="badge badge-pill badge-success">+ Android</h6>      <?php endif; ?>
          <?php if ($j == 4): ?> <h6 class="badge badge-pill badge-warning">+ Javascript</h6>   <?php endif; ?>
          <?php if ($j == 5): ?> <h6 class="badge badge-pill badge-danger">+ Administração</h6> <?php endif; ?>
          <?php if ($j == 6): ?> <h6 class="badge badge-pill badge-rose">+ Contabilidade</h6>   <?php endif; ?>
        <?php endfor; ?>
      </div>
      <div class="description text-center">
        <p>An artist of considerable range, Chet Faker &#x2014; the name taken by Melbourne-raised, Brooklyn-based Nick Murphy &#x2014; writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
      </div>
    </div>
  </div>
</div>
