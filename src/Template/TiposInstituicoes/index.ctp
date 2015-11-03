<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Instituico'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposInstituicoes index large-9 medium-8 columns content">
    <h3><?= __('Tipos Instituicoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_tipos_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('tipos_instituicoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposInstituicoes as $tiposInstituico): ?>
            <tr>
                <td><?= $this->Number->format($tiposInstituico->id_tipos_instituicoes) ?></td>
                <td><?= h($tiposInstituico->tipos_instituicoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposInstituico->id_tipos_instituicoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposInstituico->id_tipos_instituicoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposInstituico->id_tipos_instituicoes], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposInstituico->id_tipos_instituicoes)]) ?>
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
