<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $areasAtuaco->id_areas_atuacoes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $areasAtuaco->id_areas_atuacoes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Areas Atuacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="areasAtuacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($areasAtuaco) ?>
    <fieldset>
        <legend><?= __('Edit Areas Atuaco') ?></legend>
        <?php
            echo $this->Form->input('areas_atuacoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
