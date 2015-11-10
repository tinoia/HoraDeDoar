
<div class="doadores form large-9 medium-8 columns content">
    <?= $this->Form->create($doadore) ?>
    <fieldset>
        <legend><?= __('Edit Doadore') ?></legend>
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
