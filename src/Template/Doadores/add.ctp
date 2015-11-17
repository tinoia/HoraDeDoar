
<?php use Cake\Database\Connection;?>
<?php $this->layout = 'login' ?>
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de Doador</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="panel panel-primary">
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
                <?php  echo $this->Form->input('cpf_doadores',array('label'=>'CPF','class'=>'form-control',)); ?>
            </div>
            <div class="form-group">
                <?php  echo $this->Form->input('email_doadores',array('label'=>'Email','class'=>'form-control','type'=>'email')); ?>
            </div>
            <div class="form-group">
                <?php  echo $this->Form->input('senha_doadores',array('label'=>'Senha','class'=>'form-control','type'=>'password')); ?>
            </div>
            <div class="form-group">
                <?php  echo $this->Form->input('id_enderecos',array('label'=>'ID','class'=>'form-control')); ?>
            </div>
            
            <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-success">Limpar</button>
            <a href="/HoraDeDoar/doadores" class="btn btn-info" role="button">Voltar</a>
            <?php echo $this->Form->end(); ?> 
        </div>
        </div>
    </div>
</div>
</div>

