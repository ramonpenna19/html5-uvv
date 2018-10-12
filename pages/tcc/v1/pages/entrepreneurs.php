<div class="main main-raised">
	<div class="container">
		<div class="section text-center">

      <h2 class="title">Empreendedores</h2>

			<div class="row">
				<?php for ($i = 0; $i < 10; $i++): ?>
				<div class="col-sm-6 col-md-4 col-lg-3">

					<div class="card">
						<div class="card-body ">
							<a href="#">
								<div class="row">
									<div class="col-6 m-auto">
										<img src="./assets/img/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
									</div>
								</div>
								<h4 class="">Fulana da Silva</h4>
							</a>
							<h6><?php echo rand(18, 99); ?> anos</h6>
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
					</div>

				</div>
				<?php endfor; ?>
			</div>

		</div>
	</div>
</div>