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
