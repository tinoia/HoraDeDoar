<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Areas Interesses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="areasInteresses form large-9 medium-8 columns content">
    <?= $this->Form->create($areasInteress) ?>
    <fieldset>
        <legend><?= __('Add Areas Interess') ?></legend>
        <?php
            echo $this->Form->input('areas_interesses');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
