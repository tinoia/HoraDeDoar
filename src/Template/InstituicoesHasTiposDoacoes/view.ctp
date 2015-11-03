<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instituicoes Has Tipos Doaco'), ['action' => 'edit', $instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instituicoes Has Tipos Doaco'), ['action' => 'delete', $instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Instituicoes Has Tipos Doacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instituicoes Has Tipos Doaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instituicoesHasTiposDoacoes view large-9 medium-8 columns content">
    <h3><?= h($instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Instituicoes Tipos Doacoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Instituicoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasTiposDoaco->id_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Tipos Doacoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasTiposDoaco->id_tipos_doacoes) ?></td>
        </tr>
    </table>
</div>
