
<div class="container">
	<div class="row">
		<div class="panel panel-primary">                  
			<div class="panel-heading">
				<h3 class="panel-title">O que estou precisando no momento:</h3>
			</div>
			<div class="panel-body">
				<div class="col-lg-6">
					<?php echo $this->Form->create('Tipos');?>
					<div class="form-group">
						<?php  echo $this->Form->input('1',array('label'=>'Dinheiro','type'=>'checkbox')); ?>
					</div>
					<div class="form-group">
						<?php  echo $this->Form->input('2',array('label'=>'Alimento','type'=>'checkbox')); ?>
					</div>
					<div class="form-group">
						<?php  echo $this->Form->input('3',array('label'=>'Brinquedo','type'=>'checkbox')); ?>
					</div>
					<div class="form-group">
						<?php  echo $this->Form->input('4',array('label'=>'Roupa','type'=>'checkbox')); ?>
					</div>
					<div class="form-group">
						<?php  echo $this->Form->input('5',array('label'=>'Produto de limpeza','type'=>'checkbox')); ?>
					</div>
					<div class="form-group">
						<?php  echo $this->Form->input('6',array('label'=>'Produto de higiene','type'=>'checkbox')); ?>
					</div>
					<div class="form-group">
						<?php  echo $this->Form->input('7',array('label'=>'Elétrodoméstico','type'=>'checkbox')); ?>
					</div>
					<div class="form-group">
						<?php  echo $this->Form->input('8',array('label'=>'Móvel','type'=>'checkbox')); ?>
					</div>
					<div class="form-group">
						<?php  echo $this->Form->input('9',array('label'=>'Artigos de informática','type'=>'checkbox')); ?>
					</div>
					<div class="panel-footer">
						<button type="submit" class="btn btn-primary">Atualizar</button>
						<a href="/HoraDeDoar/instituicoes/dashboard" class="btn btn-info" role="button" >Voltar</a>
						<?php echo $this->Form->end(); ?> 
					</div>
				</div>
			</div>
		</div>

	</body>