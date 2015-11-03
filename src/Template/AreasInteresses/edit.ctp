<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $areasInteress->id_areas_interesses],
                ['confirm' => __('Are you sure you want to delete # {0}?', $areasInteress->id_areas_interesses)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Areas Interesses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="areasInteresses form large-9 medium-8 columns content">
    <?= $this->Form->create($areasInteress) ?>
    <fieldset>
        <legend><?= __('Edit Areas Interess') ?></legend>
        <?php
            echo $this->Form->input('areas_interesses');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
