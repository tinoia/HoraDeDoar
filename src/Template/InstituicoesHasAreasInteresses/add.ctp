<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Instituicoes Has Areas Interesses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="instituicoesHasAreasInteresses form large-9 medium-8 columns content">
    <?= $this->Form->create($instituicoesHasAreasInteress) ?>
    <fieldset>
        <legend><?= __('Add Instituicoes Has Areas Interess') ?></legend>
        <?php
            echo $this->Form->input('id_instituicoes');
            echo $this->Form->input('id_areas_interesses');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
