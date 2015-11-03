<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instituicoes Has Areas Atuaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instituicoesHasAreasAtuacoes index large-9 medium-8 columns content">
    <h3><?= __('Instituicoes Has Areas Atuacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_instituicoes_has_areas_atuacoes') ?></th>
                <th><?= $this->Paginator->sort('id_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('id_areas_atuacoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instituicoesHasAreasAtuacoes as $instituicoesHasAreasAtuaco): ?>
            <tr>
                <td><?= $this->Number->format($instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes) ?></td>
                <td><?= $this->Number->format($instituicoesHasAreasAtuaco->id_instituicoes) ?></td>
                <td><?= $this->Number->format($instituicoesHasAreasAtuaco->id_areas_atuacoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasAreasAtuaco->id_instituicoes_has_areas_atuacoes)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
