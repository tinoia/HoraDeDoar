<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enderecos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enderecos form large-9 medium-8 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= __('Add Endereco') ?></legend>
        <?php
            echo $this->Form->input('cep_enderecos');
            echo $this->Form->input('estado_enderecos');
            echo $this->Form->input('cidade_enderecos');
            echo $this->Form->input('bairro_enderecos');
            echo $this->Form->input('rua_enderecos');
            echo $this->Form->input('numero_enderecos');
            echo $this->Form->input('complemento_enderecos');
            echo $this->Form->input('mapa_endereços');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php echo $this->Form->create('Enderecos'); ?>
                        <div class="form-group">
    				<?php  echo $this->Form->input('cep_enderecos',array('label'=>'CEP','class'=>'form-control')); ?>
                                                </div>
                        <div class="form-group">
    				<?php  echo $this->Form->input('estado_enderecos',array('label'=>'Estado','class'=>'form-control')); ?>
                                                </div>
                        <div class="form-group">
    				<?php  echo $this->Form->input('cidade_enderecos',array('label'=>'Cidade','class'=>'form-control')); ?>
                                                </div>
                        <div class="form-group">
    				<?php  echo $this->Form->input('bairro_enderecos',array('label'=>'Bairro','class'=>'form-control')); ?>
                                                </div>                   
                        <div class="form-group">
    				<?php  echo $this->Form->input('rua_enderecos',array('label'=>'Rua','class'=>'form-control')); ?>
                                                </div>
                        <div class="form-group">
    				<?php  echo $this->Form->input('numero_enderecos',array('label'=>'Numero','class'=>'form-control')); ?>
                                                </div>
                        <div class="form-group">
    				<?php  echo $this->Form->input('complento_enderecos',array('label'=>'Complemento','class'=>'form-control')); ?>
                                                </div>