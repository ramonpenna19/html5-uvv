<div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/bg-home1.jpg')"></div>

<div class="main main-raised project-page">
  <div class="container">
    <div class="row">
      <div class="col col-md-8 ml-auto mr-auto text-center">
        <h3 class="title mt-5">Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni.</h3>
        <h6>10/10/2018</h6>
		    <div class="mt-2">
		      <?php for ($j = 0; $j < rand(1,7); $j++): ?>
		        <?php include "includes/components/skill_badge.php"; ?>
		      <?php endfor; ?>
		    </div>
  			<button class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#modal_interesse">Tenho Interesse!</button>
		    <div class="">
		    	<h4 class="text-left font-weight-bold">Resumo</h4>
		      <p class="text-justify">Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni. Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni. Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni.</p>
		    </div>
		    <div class="">
		    	<h4 class="text-left font-weight-bold">Descrição</h4>
		      <p class="text-justify">Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni. Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni. Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni. Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni. Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni. Lorem ipsum dolor sit amet, consectur adipisicin elit. Illo harum molestias, minima unde quos magni.</p>
		    </div>
		    <div class="row">
	    		<div class="col m-auto">
				    <div class="card dark">
		        	<div class="card-body">
					    	<div class="row project-user">
					    		<div class="col-sm-4">
					    			<a href="?page=user_detail">
						    			<img src="./assets/img/faces/avatar.jpg" alt="Avatar Image" class="img-raised rounded-circle img-fluid">
					    			</a>
					    		</div>
					    		<div class="col-sm-8">
					    			<a href="?page=user_detail">
						    			<h3 class="title m-0 text-light">Lorem User</h3>
							    		<?php include "includes/components/rating_star.php"; ?>
						    		</a>
						    		<div class="mt-2">
							    		<?php for ($j = 0; $j < rand(1,10); $j++): ?>
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
    <div class="row">
      <div class="col m-auto">
      	<div class="card dark p-3">
      		<h3 class="m-0 mb-3 title">Interessados (3)</h3>
	      	<table class="table m-3 m-auto table-sm table-dark table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Nome</th>
					      <th scope="col">Avaliação</th>
					      <th scope="col">Compatibilidade</th>
					      <th scope="col">Aprovar</th>
					      <th scope="col">Mensagem</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row"><a href="?page=user_detail">Mark Otto</a></th>
					      <td><?php include "includes/components/rating_star.php"; ?></td>
					      <td>50%</td>
					      <td>
					      	<button class="btn btn-sm btn-primary">Aprovar</button>
					      </td>
					      <td>
					      	<button class="btn btn-sm btn-primary"><i class="material-icons">mail_outline</i></button>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row"><a href="?page=user_detail">Jacob Thornton</a></th>
					      <td><?php include "includes/components/rating_star.php"; ?></td>
					      <td>50%</td>
					      <td>
					      	<button class="btn btn-sm btn-primary">Aprovar</button>
					      </td>
					      <td>
					      	<button class="btn btn-sm btn-primary"><i class="material-icons">mail_outline</i></button>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row"><a href="?page=user_detail">Larry Clarkson</a></th>
					      <td><?php include "includes/components/rating_star.php"; ?></td>
					      <td>50%</td>
					      <td>
					      	<button class="btn btn-sm btn-primary">Aprovar</button>
					      </td>
					      <td>
					      	<button class="btn btn-sm btn-primary"><i class="material-icons">mail_outline</i></button>
					      </td>
					    </tr>
					  </tbody>
					</table>
      	</div>
      </div>
    </div>
    <div class="row">
  		<div class="col m-auto">
		    <div class="card dark p-3">
      		<h3 class="m-0 mb-3 title">Mensagens</h3>
      		<?php include "includes/components/card_message.php"; ?>
      		<?php include "includes/components/card_message.php"; ?>
      		<div class="card m-0 mb-1">
						<div class="card-body">
							<textarea class="form-control" placeholder="Nova Mensagem..."></textarea>
						</div>
					</div>
					<button class="btn btn-primary ml-auto">Enviar</button>
		    </div>
	    </div>
    </div>
  </div>
</div>
<?php include "includes/components/modal_interesse.php"; ?>