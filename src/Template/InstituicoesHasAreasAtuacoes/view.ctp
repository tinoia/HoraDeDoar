<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instituicoes Has Areas Atuaco'), ['action' => 'edit', $instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instituicoes Has Areas Atuaco'), ['action' => 'delete', $instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Instituicoes Has Areas Atuacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instituicoes Has Areas Atuaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instituicoesHasAreasAtuacoes view large-9 medium-8 columns content">
    <h3><?= h($instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Instituicoes Has Areas Atuacoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Instituicoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasAreasAtuaco->id_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Areas Atuacoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasAreasAtuaco->id_areas_atuacoes) ?></td>
        </tr>
    </table>
</div>
