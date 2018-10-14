<div class="card dark">
	<div class="card-body">
		<a href="?page=user_detail">
			<div class="row">
				<div class="m-auto">
					<img src="./assets/img/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid w-50">
				</div>
			</div>
			<h4 class="text-light">Fulana da Silva</h4>
			<h6 class="text-white"><?php echo rand(18, 75); ?> anos</h6>
		</a>
		<?php for ($j = 0; $j < rand(1,3); $j++): ?>
			<?php include "includes/components/skill_badge.php"; ?>
		<?php endfor; ?>
		<br>
		<a href="javascript:;">
			<h6 class="badge badge-pill badge-primary">e outros (x) mais...</h6>
		</a>
	</div>
</div>