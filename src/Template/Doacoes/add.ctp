<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Doacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="doacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($doaco) ?>
    <fieldset>
        <legend><?= __('Add Doaco') ?></legend>
        <?php
            echo $this->Form->input('valor_doacoes');
            echo $this->Form->input('confirmacao_doacoes');
            echo $this->Form->input('anonima_doacoes');
            echo $this->Form->input('id_doadores');
            echo $this->Form->input('id_instituicoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>



<?php use Cake\Database\Connection;?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de Doação</h1>
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
                <?php echo $this->Form->create('Doacoes'); ?>
                <div class="form-group">
                    <?php  echo $this->Form->input('valor_doacoes',array('label'=>'Valor da doação','class'=>'form-control')); ?>
             </div>
             <div class="form-group">
                <?php  echo $this->Form->input('id_doadores',array('label'=>'ID do doador','class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php  echo $this->Form->input('id_instituicoes',array('label'=>'ID da instituicao','class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->label('doação anonima');?>
                <?php  echo $this->Form->checkbox('anonima_doacoes'); ?>
            </div>

            
            <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-success">Limpar</button>
            <a href="/HoraDeDoar/doacoes" class="btn btn-info" role="button">Voltar</a>
            <?php echo $this->Form->end(); ?> 
        </div>
        </div>
    </div>
</div>
</div>

