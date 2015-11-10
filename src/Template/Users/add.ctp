<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>



<?php use Cake\Database\Connection;?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de Usuário</h1>
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
                <?php echo $this->Form->create('Users'); ?>
            <div class="form-group">
                    <?php  echo $this->Form->input('name',array('label'=>'Nome completo','class'=>'form-control')); ?>
             </div>

             <div class="form-group">
                <?php  echo $this->Form->input('email',array('label'=>'Email','class'=>'form-control',)); ?>
            </div>
            <div class="form-group">
                <?php  echo $this->Form->input('password',array('label'=>'Senha','class'=>'form-control','type'=>'email')); ?>
            </div>
            <div class="form-group">
                <?php  echo $this->Form->input('type',array('label' => 'Tipo', 'options'=> array('Doador','Instituição'))); ?>
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

