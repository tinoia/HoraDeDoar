<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instituicoes Has Areas Interess'), ['action' => 'edit', $instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instituicoes Has Areas Interess'), ['action' => 'delete', $instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses)]) ?> </li>
        <li><?= $this->Html->link(__('List Instituicoes Has Areas Interesses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instituicoes Has Areas Interess'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instituicoesHasAreasInteresses view large-9 medium-8 columns content">
    <h3><?= h($instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Instituicoes Has Areas Interesses') ?></th>
            <td><?= $this->Number->format($instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Instituicoes') ?></th>
            <td><?= $this->Number->format($instituicoesHasAreasInteress->id_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Areas Interesses') ?></th>
            <td><?= $this->Number->format($instituicoesHasAreasInteress->id_areas_interesses) ?></td>
        </tr>
    </table>
</div>
