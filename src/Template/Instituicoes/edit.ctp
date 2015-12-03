<center>
    <body >
        <div class="panel panel-primary col-lg-6">
            <?php echo $this->Form->create($instituico) ?>

            <div class="panel-heading">
                <h3 class="panel-title">Atualize seus dados</h3>
            </div>
           
            <div class="panel-body">
                <div class="col-lg-8">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome_instituicoes',array('label'=>'Nome','class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('descricao_instituicoes',array('label'=>'Descrição','class'=>'form-control',)); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('cnpj_instituicoes',array('label'=>'CNPJ','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('ano_fundacao_instituicoes',array('label'=>'Ano de fundaçao','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('conta_corrente_instituicoes',array('label'=>'Conta corrente','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('telefone_instituicoes',array('label'=>'Telefone','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    
                    <div class="form-group">
                        <?php echo $this->Form->input('numero_funcionario_instituicoes',array('label'=>'Numero de funcionarios','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('numero_voluntario_instituicoes',array('label'=>'Numero de voluntarios','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('email_instituicoes',array('label'=>'Email','class'=>'form-control','type'=>'email')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('senha_instituicoes',array('label'=>'Senha','class'=>'form-control','type'=>'password')); ?>
                    </div>
                                        
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href=<?php echo "/HoraDeDoar/enderecos/edit/".$instituico->id_enderecos."?id=".$instituico->id_instituicoes?> class="btn btn-primary" role="button">Alterar endereço</a>
                        <a href=<?php echo "/HoraDeDoar/instituicoes/view/".$instituico->id_instituicoes?> class="btn btn-danger" role="button">Voltar</a>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
            </div>
        </div>
    </body> 
</center>
