<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header"><?= h($user->name) ?></h1>
    </div>
    <!--End Page Header -->
</div>



<div class="panel panel-primary">
    <div class="panel-heading">
        Dados cadastrais
    </div>
    <div class="panel-body">
            <label class="control-label"> Nome: <?= h($user->name) ?> </label><br>
            <label class="control-label"> Email: <?= h($user->email) ?> </label><br>
            <label class="control-label"> Cpf: <?= h($user->cpf) ?> </label><br>
            <label class="control-label"> ID endereço: <?= h($user->iduser) ?> </label><br>
           
    </div>
</div>
