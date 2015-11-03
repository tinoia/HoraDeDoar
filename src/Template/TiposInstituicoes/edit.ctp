<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposInstituico->id_tipos_instituicoes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposInstituico->id_tipos_instituicoes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipos Instituicoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposInstituicoes form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposInstituico) ?>
    <fieldset>
        <legend><?= __('Edit Tipos Instituico') ?></legend>
        <?php
            echo $this->Form->input('tipos_instituicoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
