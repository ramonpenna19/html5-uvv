<div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/bg-home1.jpg')"></div>

<div class="main main-raised">
	<div class="container">
		<div class="section text-center">

      <h2 class="title">Empreendedores</h2>

				<?php
					$break = 1;
					for ($i = 1; $i <= 12; $i++){

						if ($break === 1){
							echo '<div class="card-deck">';
						}

						include "includes/components/user_box.php";

						if ($break === 4){
							echo '</div>';
							$break = 1;
						} else {
							$break++;
						}

					}
				?>

		</div>
	</div>
</div>