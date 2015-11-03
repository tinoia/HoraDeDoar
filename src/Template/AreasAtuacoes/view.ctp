<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Areas Atuaco'), ['action' => 'edit', $areasAtuaco->id_areas_atuacoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Areas Atuaco'), ['action' => 'delete', $areasAtuaco->id_areas_atuacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $areasAtuaco->id_areas_atuacoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas Atuacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Areas Atuaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areasAtuacoes view large-9 medium-8 columns content">
    <h3><?= h($areasAtuaco->id_areas_atuacoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Areas Atuacoes') ?></th>
            <td><?= h($areasAtuaco->areas_atuacoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Areas Atuacoes') ?></th>
            <td><?= $this->Number->format($areasAtuaco->id_areas_atuacoes) ?></td>
        </tr>
    </table>
</div>
