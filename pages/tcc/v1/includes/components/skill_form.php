<div class="card dark">
	<h5 class="font-weight-bold mb-0">Habilidades</h5>
	<small class="mb-4">Informe as habilidades necessárias que faltam para o desenvolvimento do projeto</small>
	<div class="form-row mx-5">
		<div class="col-10">
			<div class="form-group">
				<label class="text-light">Adicionar Habilidade</label>
				<input type="text" class="form-control" placeholder="Informe aqui o nome de uma habilidade">
			</div>
		</div>
		<div class="col-2">
			<button class="btn btn-primary btn-raised p-3">Adicionar</button>
		</div>
	</div>
	<div class="mt-3 mb-3">
		<?php for ($j = 0; $j < rand(1,3); $j++): ?>
			<?php include "includes/components/skill_badge.php"; ?>
		<?php endfor; ?>
	</div>
</div>