<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Areas Atuacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="areasAtuacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($areasAtuaco) ?>
    <fieldset>
        <legend><?= __('Add Areas Atuaco') ?></legend>
        <?php
            echo $this->Form->input('areas_atuacoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
