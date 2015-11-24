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
                            <?php echo $this->Form->create('Instituicoes'); ?>
                            <div class="form-group">
                                <?php  echo $this->Form->input('nome_instituicoes',array('label'=>'Nome da instituição','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('email_instituicoes',array('label'=>'Email','class'=>'form-control','type'=>'email')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('senha_instituicoes',array('label'=>'Senha','class'=>'form-control','type'=>'password')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('cnpj_instituicoes',array('label'=>'CNPJ','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('descricao_instituicoes',array('label'=>'Descrição','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('conta_corrente_instituicoes',array('label'=>'Conta Corrente','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('telefone_instituicoes',array('label'=>'Telefone','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('ano_fundacao_instituicoes',array('label'=>'Ano de fundação','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('numero_funcionario_instituicoes',array('label'=>'Número de funcionários','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('numero_voluntario_instituicoes',array('label'=>'Número de voluntários','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('cep_instituicoes',array('label'=>'CEP','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('estado_instituicoes',array('label'=>'Estado','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('cidade_instituicoes',array('label'=>'Cidade','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('bairro_instituicoes',array('label'=>'Bairro','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('rua_instituicoes',array('label'=>'Projeto','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('numero_instituicoes',array('label'=>'Numero','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php  echo $this->Form->input('complemento_instituicoes',array('label'=>'Complemento','class'=>'form-control')); ?>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <button type="reset" class="btn btn-success">Limpar</button>
                                <a href="/HoraDeDoar/instituicoes" class="btn btn-info" role="button" >Voltar</a>
                                <?php echo $this->Form->end(); ?> 
                            </div>
                        </div>
                    </div>
                </div>
            
        </body>