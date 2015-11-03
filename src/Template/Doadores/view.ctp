<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Doadore'), ['action' => 'edit', $doadore->id_doadores]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Doadore'), ['action' => 'delete', $doadore->id_doadores], ['confirm' => __('Are you sure you want to delete # {0}?', $doadore->id_doadores)]) ?> </li>
        <li><?= $this->Html->link(__('List Doadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doadore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="doadores view large-9 medium-8 columns content">
    <h3><?= h($doadore->id_doadores) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome Doadores') ?></th>
            <td><?= h($doadore->nome_doadores) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf Doadores') ?></th>
            <td><?= h($doadore->cpf_doadores) ?></td>
        </tr>
        <tr>
            <th><?= __('Email Doadores') ?></th>
            <td><?= h($doadore->email_doadores) ?></td>
        </tr>
        <tr>
            <th><?= __('Senha Doadores') ?></th>
            <td><?= h($doadore->senha_doadores) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Doadores') ?></th>
            <td><?= $this->Number->format($doadore->id_doadores) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Enderecos') ?></th>
            <td><?= $this->Number->format($doadore->id_enderecos) ?></td>
        </tr>
    </table>
</div>
