<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header"><?= h($instituico->nome_instituicoes) ?></h1>
    </div>
    <!--End Page Header -->
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        Meus dados:
    </div>
    <div class="panel-body">
            <label class="control-label"> ID: <?= h($instituico->id_instituicoes) ?> </label><br>
            <label class="control-label"> Nome: <?= h($instituico->nome_instituicoes) ?> </label><br>
            <label class="control-label"> Descrição: <?= h($instituico->descricao_instituicoes) ?> </label><br>
            <label class="control-label"> CNPJ: <?= h($instituico->cnpj_instituicoes) ?> </label><br>
            <label class="control-label"> Ano de fundação: <?= h($instituico->ano_fundacao_instituicoes) ?> </label><br>
            <label class="control-label"> Numero de funcionários: <?= h($instituico->numero_funcionario_instituicoes) ?> </label><br>
            <label class="control-label"> Numero de voluntários: <?= h($instituico->numero_voluntario_instituicoes) ?> </label><br>
            <label class="control-label"> Conta Corrente: <?= h($instituico->conta_corrente_instituicoes) ?> </label><br>
            <label class="control-label"> Telefone: <?= h($instituico->telefone_instituicoes) ?> </label><br>
            <label class="control-label"> Email: <?= h($instituico->email_instituicoes) ?> </label><br>
            <label class="control-label"> Senha: <?= h($instituico->senha_instituicoes) ?> </label><br>
    </div>
    <div class="panel-footer">
            <a href=<?php echo "/HoraDeDoar/instituicoes/edit/".$instituico->id_instituicoes?> class="btn btn-primary" role="button">Alterar dados</a>
            <a href=<?php echo "/HoraDeDoar/instituicoes"?> class="btn btn-danger" role="button">Voltar</a>
    </div>
</div>



