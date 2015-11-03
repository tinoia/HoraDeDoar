<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Doadores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="doadores form large-9 medium-8 columns content">
    <?= $this->Form->create($doadore) ?>
    <fieldset>
        <legend><?= __('Add Doadore') ?></legend>
        <?php
            echo $this->Form->input('nome_doadores');
            echo $this->Form->input('cpf_doadores');
            echo $this->Form->input('email_doadores');
            echo $this->Form->input('senha_doadores');
            echo $this->Form->input('id_enderecos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
