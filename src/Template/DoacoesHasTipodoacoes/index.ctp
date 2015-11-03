<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Doacoes Has Tipodoaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doacoesHasTipodoacoes index large-9 medium-8 columns content">
    <h3><?= __('Doacoes Has Tipodoacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_doacoes_has_tipos_doacoes') ?></th>
                <th><?= $this->Paginator->sort('id_doacoes') ?></th>
                <th><?= $this->Paginator->sort('id_tipos_doacoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doacoesHasTipodoacoes as $doacoesHasTipodoaco): ?>
            <tr>
                <td><?= $this->Number->format($doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes) ?></td>
                <td><?= $this->Number->format($doacoesHasTipodoaco->id_doacoes) ?></td>
                <td><?= $this->Number->format($doacoesHasTipodoaco->id_tipos_doacoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes)]) ?>
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
