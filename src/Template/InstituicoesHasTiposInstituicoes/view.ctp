<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instituicoes Has Tipos Instituico'), ['action' => 'edit', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instituicoes Has Tipos Instituico'), ['action' => 'delete', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Instituicoes Has Tipos Instituicoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instituicoes Has Tipos Instituico'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instituicoesHasTiposInstituicoes view large-9 medium-8 columns content">
    <h3><?= h($instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Instituicoes Tipos Instituicoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Instituicoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasTiposInstituico->id_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Tipos Instituicoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasTiposInstituico->id_tipos_instituicoes) ?></td>
        </tr>
    </table>
</div>
