<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Doacoes Has Tipodoaco'), ['action' => 'edit', $doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Doacoes Has Tipodoaco'), ['action' => 'delete', $doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Doacoes Has Tipodoacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doacoes Has Tipodoaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="doacoesHasTipodoacoes view large-9 medium-8 columns content">
    <h3><?= h($doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Doacoes Has Tipos Doacoes') ?></th>
            <td><?= $this->Number->format($doacoesHasTipodoaco->id_doacoes_has_tipos_doacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Doacoes') ?></th>
            <td><?= $this->Number->format($doacoesHasTipodoaco->id_doacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Tipos Doacoes') ?></th>
            <td><?= $this->Number->format($doacoesHasTipodoaco->id_tipos_doacoes) ?></td>
        </tr>
    </table>
</div>
