<div class="card dark">
	<div class="card-body ">
		<h4 class="card-title">
			<a href="?page=project_detail" class="text-light">Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni.</a>
		</h4>
		<?php for ($j = 0; $j < rand(1,3); $j++): ?>
			<?php include "includes/components/skill_badge.php"; ?>
		<?php endfor; ?>
	</div>
	<div class="card-footer">
		<div class="author mr-auto">
			<a href="?page=user_detail">
				<img src="./assets/img/faces/christian.jpg" alt="..." class="avatar img-raised">
				<span>Lord Alex</span>
			</a>
		</div>
		<h6 class="card-category text-danger text-center">
			<i class="material-icons">calendar_today</i> 12/12/2010
		</h6>
		<div class="stats ml-auto">
			<i class="material-icons">chat_bubble</i> 45
		</div>
	</div>
</div>