

<?php use Cake\Database\Connection;?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de Instituição</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        Entre com os dados para cadastro:
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <?php echo $this->Form->create('Instituicoes'); ?>
                <div class="form-group">
                    <?php  echo $this->Form->input('nome_instituicoes',array('label'=>'Nome da instituição','class'=>'form-control')); ?>
               </div>
               <div class="form-group">
                <?php  echo $this->Form->input('email_instituicoes',array('label'=>'Email','class'=>'form-control')); ?>
            </div>
               <div class="form-group">
                <?php  echo $this->Form->input('descricao_instituicoes',array('label'=>'Descrição','class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php  echo $this->Form->input('cnpj_instituicoes',array('label'=>'Senha','class'=>'form-control')); ?>
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
                <?php  echo $this->Form->input('projeto_instituicoes',array('label'=>'Projeto','class'=>'form-control')); ?>
            </div>
            
            <div class="form-group">
                <?php  echo $this->Form->input('senha_instituicoes',array('label'=>'Senha','class'=>'form-control','type'=>'password')); ?>
            </div>

           
            


            <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-success">Limpar</button>
            <a href="/HoraDeDoar/instituicoes" class="btn btn-info" role="button">Voltar</a>
            <?php echo $this->Form->end(); ?> 
        </div>
        </div>
    </div>
</div>
</div>
