<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instituicoes Has Areas Interess'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instituicoesHasAreasInteresses index large-9 medium-8 columns content">
    <h3><?= __('Instituicoes Has Areas Interesses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_instituicoes_has_areas_interesses') ?></th>
                <th><?= $this->Paginator->sort('id_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('id_areas_interesses') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instituicoesHasAreasInteresses as $instituicoesHasAreasInteress): ?>
            <tr>
                <td><?= $this->Number->format($instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses) ?></td>
                <td><?= $this->Number->format($instituicoesHasAreasInteress->id_instituicoes) ?></td>
                <td><?= $this->Number->format($instituicoesHasAreasInteress->id_areas_interesses) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasAreasInteress->id_instituicoes_has_areas_interesses)]) ?>
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
