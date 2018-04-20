<div class="center-all">
	<h1 class="title-size">Visualização da Ocorrência</h1><a href="<?=HOME_URI?>/ocurrences" class="button back small">Voltar</a>
</div>
<hr>
<br><h2>Detalhes</h2><br>	
<div class="card">

	<div class="container">
		<fieldset class="ocurrence-fieldset">
			<legend><header class="view-title"><h3>Dados da ocorrência</h3></header></legend>

				<p class="form-group"><span style="font-weight: bold">Local:</span> <?=$this->model->ocurrence['Place'] ?>.</p>

				<p class="form-group"><span style="font-weight: bold">Descrição: </span>
					 <?=$this->model->ocurrence['Description'] ?>
				</p>

		</fieldset>
	</div>
</div>
<div class="card">
	<div class="container">
		<fieldset class="ocurrence-fieldset">
			<legend><header class="view-title"><h3>Dados da Reporter</h3></header></legend>

				<p class="form-group"><span style="font-weight: bold">Email:</span>  <?=$this->model->ocurrence['Reporter_Email'] ?>.</p>

				<p class="form-group"><span style="font-weight: bold">CPF: </span>  <?=$this->model->ocurrence['Reporter_CPF'] ?>.</p>

		</fieldset>
	</div>
</div>
<div class="card">
	<div class="container">
		<fieldset class="ocurrence-fieldset">
			<legend><header class="view-title"><h3>Detalhes da ocorrência</h3></header></legend>

				<p class="form-group"><span style="font-weight: bold">Local:</span>  <?=$this->model->ocurrence['Place'] ?>.</p>

				<p class="form-group"><span style="font-weight: bold">Data de abertura: </span> 
					<?=$this->model->ocurrence['Opening_Date'] ? date('d/m/Y H:i:s', strtotime($this->model->ocurrence['Opening_Date'])) : "Não há" ?>. 
				</p>

				<p class="form-group"><span style="font-weight: bold">Data de fechamento: </span> 
					<?=$this->model->ocurrence['Closing_Date'] ? date('d/m/Y H:i:s', strtotime($this->model->ocurrence['Closing_Date'])) : "Não há" ?>.
				</p>

		</fieldset>
	</div>
</div>
<div class="card">
	<div class="container">
		<fieldset class="ocurrence-fieldset">
			<legend><header class="view-title"><h3>Imagens da ocorrência</h3></header></legend>
				<?php foreach($this->model->ocurrence['Pictures'] as $pic) { ?>
		            <figure>
		  				<img src="<?=$pic['src']?>" alt="<?=$pic['title']?>" width="304" height="228">
		  				<figcaption><?=$pic['title']?></figcaption>
					</figure><br>    
		        <?php } ?>
		</fieldset>
	</div>
</div>
		
<a href="<?=HOME_URI?>/ocurrences" class="button warning ripple mg-t-10">Voltar</a>