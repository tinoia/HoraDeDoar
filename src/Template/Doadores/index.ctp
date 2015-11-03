<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Doadore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doadores index large-9 medium-8 columns content">
    <h3><?= __('Doadores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_doadores') ?></th>
                <th><?= $this->Paginator->sort('nome_doadores') ?></th>
                <th><?= $this->Paginator->sort('cpf_doadores') ?></th>
                <th><?= $this->Paginator->sort('email_doadores') ?></th>
                <th><?= $this->Paginator->sort('senha_doadores') ?></th>
                <th><?= $this->Paginator->sort('id_enderecos') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doadores as $doadore): ?>
            <tr>
                <td><?= $this->Number->format($doadore->id_doadores) ?></td>
                <td><?= h($doadore->nome_doadores) ?></td>
                <td><?= h($doadore->cpf_doadores) ?></td>
                <td><?= h($doadore->email_doadores) ?></td>
                <td><?= h($doadore->senha_doadores) ?></td>
                <td><?= $this->Number->format($doadore->id_enderecos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $doadore->id_doadores]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doadore->id_doadores]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doadore->id_doadores], ['confirm' => __('Are you sure you want to delete # {0}?', $doadore->id_doadores)]) ?>
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
