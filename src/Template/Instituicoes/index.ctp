<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instituico'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instituicoes index large-9 medium-8 columns content">
    <h3><?= __('Instituicoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('nome_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('descricao_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('conta_corrente_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('cnpj_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('telefone_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('ano_fundacao_instituicoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instituicoes as $instituico): ?>
            <tr>
                <td><?= $this->Number->format($instituico->id_instituicoes) ?></td>
                <td><?= h($instituico->nome_instituicoes) ?></td>
                <td><?= h($instituico->descricao_instituicoes) ?></td>
                <td><?= h($instituico->conta_corrente_instituicoes) ?></td>
                <td><?= $this->Number->format($instituico->cnpj_instituicoes) ?></td>
                <td><?= h($instituico->telefone_instituicoes) ?></td>
                <td><?= $this->Number->format($instituico->ano_fundacao_instituicoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instituico->id_instituicoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instituico->id_instituicoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instituico->id_instituicoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituico->id_instituicoes)]) ?>
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
