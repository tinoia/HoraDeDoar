<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Areas Interess'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areasInteresses index large-9 medium-8 columns content">
    <h3><?= __('Areas Interesses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_areas_interesses') ?></th>
                <th><?= $this->Paginator->sort('areas_interesses') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areasInteresses as $areasInteress): ?>
            <tr>
                <td><?= $this->Number->format($areasInteress->id_areas_interesses) ?></td>
                <td><?= h($areasInteress->areas_interesses) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areasInteress->id_areas_interesses]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areasInteress->id_areas_interesses]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areasInteress->id_areas_interesses], ['confirm' => __('Are you sure you want to delete # {0}?', $areasInteress->id_areas_interesses)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
