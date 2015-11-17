<?php $this->layout = 'login' ?>
<body class="body-Login-back">

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Escolha o tipo de cadastro</h3>
                    </div>
                    <div class="panel-body">
                        <?= $this->Form->create('User') ?>
                        <a href="http://localhost/HoraDeDoar/Instituicoes/add" class="btn btn-lg btn-success btn-block">Instituição</a>
                        
                        <a href="http://localhost/HoraDeDoar/Doadores/add" class="btn btn-lg btn-success btn-block">Doador</a>
                        <?= $this->Form->end() ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
