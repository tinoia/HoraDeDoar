<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instituico'), ['action' => 'edit', $instituico->id_instituicoes]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instituico'), ['action' => 'delete', $instituico->id_instituicoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituico->id_instituicoes)]) ?> </li>
        <li><?= $this->Html->link(__('List Instituicoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instituico'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instituicoes view large-9 medium-8 columns content">
    <h3><?= h($instituico->id_instituicoes) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome Instituicoes') ?></th>
            <td><?= h($instituico->nome_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao Instituicoes') ?></th>
            <td><?= h($instituico->descricao_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Conta Corrente Instituicoes') ?></th>
            <td><?= h($instituico->conta_corrente_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone Instituicoes') ?></th>
            <td><?= h($instituico->telefone_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Projeto Instituicoes') ?></th>
            <td><?= h($instituico->projeto_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Email Instituicoes') ?></th>
            <td><?= h($instituico->email_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Senha Instituicoes') ?></th>
            <td><?= h($instituico->senha_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Instituicoes') ?></th>
            <td><?= $this->Number->format($instituico->id_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Cnpj Instituicoes') ?></th>
            <td><?= $this->Number->format($instituico->cnpj_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Ano Fundacao Instituicoes') ?></th>
            <td><?= $this->Number->format($instituico->ano_fundacao_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero Funcionario Instituicoes') ?></th>
            <td><?= $this->Number->format($instituico->numero_funcionario_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero Voluntario Instituicoes') ?></th>
            <td><?= $this->Number->format($instituico->numero_voluntario_instituicoes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Enderecos') ?></th>
            <td><?= $this->Number->format($instituico->id_enderecos) ?></td>
        </tr>
    </table>
</div>
