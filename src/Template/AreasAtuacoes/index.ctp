<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Areas Atuaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areasAtuacoes index large-9 medium-8 columns content">
    <h3><?= __('Areas Atuacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_areas_atuacoes') ?></th>
                <th><?= $this->Paginator->sort('areas_atuacoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areasAtuacoes as $areasAtuaco): ?>
            <tr>
                <td><?= $this->Number->format($areasAtuaco->id_areas_atuacoes) ?></td>
                <td><?= h($areasAtuaco->areas_atuacoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areasAtuaco->id_areas_atuacoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areasAtuaco->id_areas_atuacoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areasAtuaco->id_areas_atuacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $areasAtuaco->id_areas_atuacoes)]) ?>
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
