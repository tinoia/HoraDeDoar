<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Instituicoes Has Tipos Instituicoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="instituicoesHasTiposInstituicoes form large-9 medium-8 columns content">
    <?= $this->Form->create($instituicoesHasTiposInstituico) ?>
    <fieldset>
        <legend><?= __('Edit Instituicoes Has Tipos Instituico') ?></legend>
        <?php
            echo $this->Form->input('id_instituicoes');
            echo $this->Form->input('id_tipos_instituicoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
