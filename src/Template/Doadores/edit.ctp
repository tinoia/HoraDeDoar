<center>
    <body >
        <div class="panel panel-primary col-lg-6">
            <?php echo $this->Form->create($doadore) ?>

            <div class="panel-heading">
                <h3 class="panel-title">Atualize seus dados</h3>
            </div>

            <div class="panel-body">
                <div class="col-lg-8">
                    <div class="form-group">
                        <?php echo $this->Form->input('nome_doadores',array('label'=>'Nome completo','class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('cpf_doadores',array('label'=>'CPF','class'=>'form-control',)); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('email_doadores',array('label'=>'Email','class'=>'form-control','type'=>'email')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('email_doadores',array('label'=>'Confirme o email','class'=>'form-control','type'=>'email')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('senha_doadores',array('label'=>'Senha','class'=>'form-control','type'=>'password')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('senha_doadores',array('label'=>'Confirme a senha','class'=>'form-control','type'=>'password')); ?>
                    </div>
                    
                    
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href=<?php echo "/HoraDeDoar/enderecos/edit/".$doadore->id_enderecos."?id=".$doadore->id_doadores?> class="btn btn-primary" role="button">Alterar endereço</a>
                        <a href=<?php echo "/HoraDeDoar/instituicoes"?> class="btn btn-danger" role="button">Voltar</a>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
            </div>
        </div>
    </body> 
</center>



