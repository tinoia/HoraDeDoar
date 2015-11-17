<body class="body-Login-back">

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Faça login para continuar</h3>
                    </div>
                    <div class="panel-body">


                        <?= $this->Form->create('User') ?>
                        <?= $this->Flash->render() ?>
                        <?= $this->Flash->render('auth') ?>
                        <?= $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email' , 'name' => 'email' , 'type' => 'email' , 'autofocus', 'label' => _('Email') . ': ')); ?>
                        <br>
                        <?= $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Senha' , 'name' => 'password' , 'type' => 'password', 'label' => _('Senha') . ': ')); ?> 
                        <br>
                        <?= $this->Form->submit(_('Entrar'), array('class' => 'btn btn-lg btn-success btn-block')) ?>
                        <br>
                        <a href="http://localhost/HoraDeDoar/Users/opcao" class="btn btn-lg btn-success btn-block">Cadastrar</a>
                        <?= $this->Form->end() ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
