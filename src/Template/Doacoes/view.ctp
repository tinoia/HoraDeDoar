<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Doaco'), ['action' => 'edit', $doaco->id_doacoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Doaco'), ['action' => 'delete', $doaco->id_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $doaco->id_doacoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Doacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="doacoes view large-9 medium-8 columns content">
    <h3><?= h($doaco->id_doacoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Doacoes') ?></th>
            <td><?= $this->Number->format($doaco->id_doacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Doacoes') ?></th>
            <td><?= $this->Number->format($doaco->valor_doacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Confirmacao Doacoes') ?></th>
            <td><?= $this->Number->format($doaco->confirmacao_doacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Anonima Doacoes') ?></th>
            <td><?= $this->Number->format($doaco->anonima_doacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Doadores') ?></th>
            <td><?= $this->Number->format($doaco->id_doadores) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Instituicoes') ?></th>
            <td><?= $this->Number->format($doaco->id_instituicoes) ?></td>
        </tr>
    </table>
</div>
