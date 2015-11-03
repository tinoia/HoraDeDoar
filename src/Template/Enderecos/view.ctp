<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->id_enderecos]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->id_enderecos], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id_enderecos)]) ?> </li>
        <li><?= $this->Html->link(__('List Enderecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enderecos view large-9 medium-8 columns content">
    <h3><?= h($endereco->id_enderecos) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cep Enderecos') ?></th>
            <td><?= h($endereco->cep_enderecos) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Enderecos') ?></th>
            <td><?= h($endereco->estado_enderecos) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade Enderecos') ?></th>
            <td><?= h($endereco->cidade_enderecos) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro Enderecos') ?></th>
            <td><?= h($endereco->bairro_enderecos) ?></td>
        </tr>
        <tr>
            <th><?= __('Rua Enderecos') ?></th>
            <td><?= h($endereco->rua_enderecos) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero Enderecos') ?></th>
            <td><?= h($endereco->numero_enderecos) ?></td>
        </tr>
        <tr>
            <th><?= __('Complemento Enderecos') ?></th>
            <td><?= h($endereco->complemento_enderecos) ?></td>
        </tr>
        <tr>
            <th><?= __('Mapa Endereços') ?></th>
            <td><?= h($endereco->mapa_endereços) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Enderecos') ?></th>
            <td><?= $this->Number->format($endereco->id_enderecos) ?></td>
        </tr>
    </table>
</div>
