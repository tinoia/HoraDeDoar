<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instituicoes Has Tipos Doaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instituicoesHasTiposDoacoes index large-9 medium-8 columns content">
    <h3><?= __('Instituicoes Has Tipos Doacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_instituicoes_tipos_doacoes') ?></th>
                <th><?= $this->Paginator->sort('id_instituicoes') ?></th>
                <th><?= $this->Paginator->sort('id_tipos_doacoes') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instituicoesHasTiposDoacoes as $instituicoesHasTiposDoaco): ?>
            <tr>
                <td><?= $this->Number->format($instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes) ?></td>
                <td><?= $this->Number->format($instituicoesHasTiposDoaco->id_instituicoes) ?></td>
                <td><?= $this->Number->format($instituicoesHasTiposDoaco->id_tipos_doacoes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituicoesHasTiposDoaco->id_instituicoes_tipos_doacoes)]) ?>
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
