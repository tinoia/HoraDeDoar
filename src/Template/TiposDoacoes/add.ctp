<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipos Doacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposDoacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposDoaco) ?>
    <fieldset>
        <legend><?= __('Add Tipos Doaco') ?></legend>
        <?php
            echo $this->Form->input('tipos_doacoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
