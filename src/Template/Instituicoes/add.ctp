<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Instituicoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="instituicoes form large-9 medium-8 columns content">
    <?= $this->Form->create($instituico) ?>
    <fieldset>
        <legend><?= __('Add Instituico') ?></legend>
        <?php
            echo $this->Form->input('nome_instituicoes');
            echo $this->Form->input('descricao_instituicoes');
            echo $this->Form->input('conta_corrente_instituicoes');
            echo $this->Form->input('cnpj_instituicoes');
            echo $this->Form->input('telefone_instituicoes');
            echo $this->Form->input('ano_fundacao_instituicoes');
            echo $this->Form->input('numero_funcionario_instituicoes');
            echo $this->Form->input('numero_voluntario_instituicoes');
            echo $this->Form->input('projeto_instituicoes');
            echo $this->Form->input('email_instituicoes');
            echo $this->Form->input('senha_instituicoes');
            echo $this->Form->input('id_enderecos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
