<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Instituicoes Has Areas Atuacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="instituicoesHasAreasAtuacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($instituicoesHasAreasAtuaco) ?>
    <fieldset>
        <legend><?= __('Add Instituicoes Has Areas Atuaco') ?></legend>
        <?php
            echo $this->Form->input('id_instituicoes');
            echo $this->Form->input('id_areas_atuacoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
