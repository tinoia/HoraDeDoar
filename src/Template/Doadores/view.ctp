<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header"><?= h($doadore->nome_doadores) ?></h1>
    </div>
    <!--End Page Header -->
</div>



<div class="panel panel-primary">
    <div class="panel-heading">
        Meus dados:
    </div>
    <div class="panel-body">
            <label class="control-label"> ID: <?= h($doadore->id_doadores) ?> </label><br>
            <label class="control-label"> Nome: <?= h($doadore->nome_doadores) ?> </label><br>
            <label class="control-label"> Cpf: <?= h($doadore->cpf_doadores) ?> </label><br>
            <label class="control-label"> email: <?= h($doadore->email_doadores) ?> </label><br>
            <label class="control-label"> Senha: <?= h($doadore->senha_doadores) ?> </label><br>
            <label class="control-label"> ID endereço: <?= h($doadore->id_endereços) ?> </label><br>
    </div>

    <div class="panel-footer">
            <a href=<?php echo "/HoraDeDoar/doadores/edit/".$doadore->id_doadores?> class="btn btn-primary" role="button">Alterar dados</a>
            <a href=<?php echo "/HoraDeDoar/instituicoes"?> class="btn btn-danger" role="button">Voltar</a>
    </div>
</div>


