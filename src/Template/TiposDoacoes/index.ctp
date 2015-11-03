<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Doaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposDoacoes index large-9 medium-8 columns content">
    <h3><?= __('Tipos Doacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_tipos_doacoes') ?></th>
                <th><?= $this->Paginator->sort('tipos_doacoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposDoacoes as $tiposDoaco): ?>
            <tr>
                <td><?= $this->Number->format($tiposDoaco->id_tipos_doacoes) ?></td>
                <td><?= h($tiposDoaco->tipos_doacoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposDoaco->id_tipos_doacoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposDoaco->id_tipos_doacoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposDoaco->id_tipos_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposDoaco->id_tipos_doacoes)]) ?>
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
