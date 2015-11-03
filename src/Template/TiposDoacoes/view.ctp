<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Doaco'), ['action' => 'edit', $tiposDoaco->id_tipos_doacoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Doaco'), ['action' => 'delete', $tiposDoaco->id_tipos_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposDoaco->id_tipos_doacoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Doacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Doaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposDoacoes view large-9 medium-8 columns content">
    <h3><?= h($tiposDoaco->id_tipos_doacoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tipos Doacoes') ?></th>
            <td><?= h($tiposDoaco->tipos_doacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Tipos Doacoes') ?></th>
            <td><?= $this->Number->format($tiposDoaco->id_tipos_doacoes) ?></td>
        </tr>
    </table>
</div>
