<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Instituicoes Has Tipos Doacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="instituicoesHasTiposDoacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($instituicoesHasTiposDoaco) ?>
    <fieldset>
        <legend><?= __('Add Instituicoes Has Tipos Doaco') ?></legend>
        <?php
            echo $this->Form->input('id_instituicoes');
            echo $this->Form->input('id_tipos_doacoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
