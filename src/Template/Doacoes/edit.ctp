<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doaco->id_doacoes],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doaco->id_doacoes)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Doacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="doacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($doaco) ?>
    <fieldset>
        <legend><?= __('Edit Doaco') ?></legend>
        <?php
            echo $this->Form->input('valor_doacoes');
            echo $this->Form->input('confirmacao_doacoes');
            echo $this->Form->input('anonima_doacoes');
            echo $this->Form->input('id_doadores');
            echo $this->Form->input('id_instituicoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
