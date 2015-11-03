<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Instituico'), ['action' => 'edit', $tiposInstituico->id_tipos_instituicoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Instituico'), ['action' => 'delete', $tiposInstituico->id_tipos_instituicoes], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposInstituico->id_tipos_instituicoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Instituicoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Instituico'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposInstituicoes view large-9 medium-8 columns content">
    <h3><?= h($tiposInstituico->id_tipos_instituicoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tipos Instituicoes') ?></th>
            <td><?= h($tiposInstituico->tipos_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Tipos Instituicoes') ?></th>
            <td><?= $this->Number->format($tiposInstituico->id_tipos_instituicoes) ?></td>
        </tr>
    </table>
</div>
