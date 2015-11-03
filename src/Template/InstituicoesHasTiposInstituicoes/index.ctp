<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instituicoes Has Tipos Instituico'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instituicoesHasTiposInstituicoes index large-9 medium-8 columns content">
    <h3><?= __('Instituicoes Has Tipos Instituicoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_instituicoes_tipos_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('id_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('id_tipos_instituicoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instituicoesHasTiposInstituicoes as $instituicoesHasTiposInstituico): ?>
            <tr>
                <td><?= $this->Number->format($instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes) ?></td>
                <td><?= $this->Number->format($instituicoesHasTiposInstituico->id_instituicoes) ?></td>
                <td><?= $this->Number->format($instituicoesHasTiposInstituico->id_tipos_instituicoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasTiposInstituico->id_instituicoes_tipos_instituicoes)]) ?>
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
