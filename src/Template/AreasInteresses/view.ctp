<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Areas Interess'), ['action' => 'edit', $areasInteress->id_areas_interesses]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Areas Interess'), ['action' => 'delete', $areasInteress->id_areas_interesses], ['confirm' => __('Are you sure you want to delete # {0}?', $areasInteress->id_areas_interesses)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas Interesses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Areas Interess'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areasInteresses view large-9 medium-8 columns content">
    <h3><?= h($areasInteress->id_areas_interesses) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Areas Interesses') ?></th>
            <td><?= h($areasInteress->areas_interesses) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Areas Interesses') ?></th>
            <td><?= $this->Number->format($areasInteress->id_areas_interesses) ?></td>
        </tr>
    </table>
</div>
