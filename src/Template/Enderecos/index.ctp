<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecos index large-9 medium-8 columns content">
    <h3><?= __('Enderecos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_enderecos') ?></th>
                <th><?= $this->Paginator->sort('cep_enderecos') ?></th>
                <th><?= $this->Paginator->sort('estado_enderecos') ?></th>
                <th><?= $this->Paginator->sort('cidade_enderecos') ?></th>
                <th><?= $this->Paginator->sort('bairro_enderecos') ?></th>
                <th><?= $this->Paginator->sort('rua_enderecos') ?></th>
                <th><?= $this->Paginator->sort('numero_enderecos') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enderecos as $endereco): ?>
            <tr>
                <td><?= $this->Number->format($endereco->id_enderecos) ?></td>
                <td><?= h($endereco->cep_enderecos) ?></td>
                <td><?= h($endereco->estado_enderecos) ?></td>
                <td><?= h($endereco->cidade_enderecos) ?></td>
                <td><?= h($endereco->bairro_enderecos) ?></td>
                <td><?= h($endereco->rua_enderecos) ?></td>
                <td><?= h($endereco->numero_enderecos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $endereco->id_enderecos]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $endereco->id_enderecos]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $endereco->id_enderecos], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_enderecos)]) ?>
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
