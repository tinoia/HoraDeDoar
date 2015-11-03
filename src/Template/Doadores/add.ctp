
<?php use Cake\Database\Connection;?>
 <div class="panel panel-default">
    <div class="panel-heading">
        Entre com os dados para cadastro:
    </div>
    <div class="panel-body">
    	<div class="row">
    		<div class="col-lg-6">
    			<?php echo $this->Form->create('Doadores'); ?>
    			<div class="form-group">
    				<?php  echo $this->Form->input('nome_doadores',array('label'=>'Nome completo','class'=>'form-control')); ?>
    			   			</div>
    			<div class="form-group">
    				<?php  echo $this->Form->input('cpf_doadores',array('label'=>'CPF','class'=>'form-control')); ?>
                                                </div>
    			<div class="form-group">
    				<?php  echo $this->Form->input('email_doadores',array('label'=>'Email','class'=>'form-control')); ?>
                                                </div>
                        <div class="form-group">
    				<?php  echo $this->Form->input('senha_doadores',array('label'=>'Senha','class'=>'form-control')); ?>
                                                </div>
                        <div class="form-group">
    				<?php  echo $this->Form->input('id_enderecos',array('label'=>'ID','class'=>'form-control')); ?>
                                                </div>
                        
                        <?php echo $this->Form->end(); ?>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
    			<button type="reset" class="btn btn-success">Limpar</button>
    			<?php echo $this->Form->end(); ?> 
    			</div>
    		</div>
    	</div>
	</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listar Doadores'), ['action' => 'index']) ?></li>
    </ul>
</nav>