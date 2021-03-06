<?php $this->layout = 'login' ?>
<body class="body-Login-back">

    <div class="container">

        <div class="row">


            <div class="panel panel-primary">                  
                <div class="panel-heading">
                    <h3 class="panel-title">Entre com os dados para cadastro</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-6">
                        <?php echo $this->Form->create('Doadores'); ?>
                        <div class="form-group">
                            <?php  echo $this->Form->input('nome_doadores',array('label'=>'Nome completo','class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('cpf_doadores',array('label'=>'CPF','class'=>'form-control',)); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('email_doadores',array('label'=>'Email','class'=>'form-control','type'=>'email')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('senha_doadores',array('label'=>'Senha','class'=>'form-control','type'=>'password')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('cep_doadores',array('label'=>'CEP','class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('estado_doadores',array('label'=>'Estado','class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('cidade_doadores',array('label'=>'Cidade','class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('bairro_doadores',array('label'=>'Bairro','class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('rua_doadores',array('label'=>'Projeto','class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('numero_doadores',array('label'=>'Numero','class'=>'form-control')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('complemento_doadores',array('label'=>'Complemento','class'=>'form-control')); ?>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <button type="reset" class="btn btn-success">Limpar</button>
                            <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
                            
                            <?php echo $this->Form->end(); ?> 
                        </div>
                    </div>
                </div>
            </div>
            
        </body>

