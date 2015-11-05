<?php use Cake\Database\Connection;?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de tipo de doação</h1>
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
                <?php echo $this->Form->create('TiposDoacoes'); ?>
            <div class="form-group">
                    <?php  echo $this->Form->input('tipos_doacoes',array('label'=>'Descrição','class'=>'form-control')); ?>
             </div>
            
            <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-success">Limpar</button>
            <a href="/HoraDeDoar/TiposDoacoes" class="btn btn-info" role="button">Voltar</a>
            <?php echo $this->Form->end(); ?> 
        </div>
        </div>
    </div>
</div>
</div>

