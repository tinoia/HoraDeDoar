<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Doacoes Has Tipodoacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="doacoesHasTipodoacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($doacoesHasTipodoaco) ?>
    <fieldset>
        <legend><?= __('Add Doacoes Has Tipodoaco') ?></legend>
        <?php
            echo $this->Form->input('id_doacoes');
            echo $this->Form->input('id_tipos_doacoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
