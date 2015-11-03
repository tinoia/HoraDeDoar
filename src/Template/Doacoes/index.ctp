<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Doaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doacoes index large-9 medium-8 columns content">
    <h3><?= __('Doacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_doacoes') ?></th>
                <th><?= $this->Paginator->sort('valor_doacoes') ?></th>
                <th><?= $this->Paginator->sort('confirmacao_doacoes') ?></th>
                <th><?= $this->Paginator->sort('anonima_doacoes') ?></th>
                <th><?= $this->Paginator->sort('id_doadores') ?></th>
                <th><?= $this->Paginator->sort('id_instituicoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doacoes as $doaco): ?>
            <tr>
                <td><?= $this->Number->format($doaco->id_doacoes) ?></td>
                <td><?= $this->Number->format($doaco->valor_doacoes) ?></td>
                <td><?= $this->Number->format($doaco->confirmacao_doacoes) ?></td>
                <td><?= $this->Number->format($doaco->anonima_doacoes) ?></td>
                <td><?= $this->Number->format($doaco->id_doadores) ?></td>
                <td><?= $this->Number->format($doaco->id_instituicoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $doaco->id_doacoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doaco->id_doacoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doaco->id_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $doaco->id_doacoes)]) ?>
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
