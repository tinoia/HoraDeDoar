<?php use Cake\Database\Connection;?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-4">
        <h1 class="page-header">Efetuar doação em dinheiro</h1>
    </div>
    <!--End Page Header -->
</div>



<div class="panel panel-primary col-lg-4">
    <div class="panel-heading">
        Informe os dados para doação:
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
            <?php echo $this->Form->create('Doacoes'); ?>
            <div class="form-group">
                    
                    <div class="form-group input-group">
                        <span class="input-group-addon">$</span>
                            <?php  echo $this->Form->input('valor_doacoes',array('label'=>'','class'=>'form-control')); ?>
                        <span class="input-group-addon">.00</span>
                    </div>

            </div>
            <div class="form-group">
                <?php
                $session = $this->request->session();
                $idUsuario = $session->read('Auth.User.iduser');
                $conecta = mysql_connect("localhost", "root", "tineloco1") or print (mysql_error()); 
                mysql_select_db("banco_hdd", $conecta);
                $sql = "SELECT * FROM doadores where users_iduser = $idUsuario";
                $qr  = mysql_query($sql) or die(mysql_error());
                $ln = mysql_fetch_assoc($qr);
                $idUsuario = $ln['id_doadores'];
                echo $this->Form->input('id_doadores',array('type' => 'hidden','value' => $idUsuario, 'class'=>'form-control')); 
                echo $this->Form->input('confirmacao_doacoes',array('type' => 'hidden','value' => 0, 'class'=>'form-control')); ?>
            </div>
            <div class="form-group">
                <?php
                $idInstituicao = $_GET['id'];
                $dataHoje = date('Y-m-d H:i:s');
                
                echo $this->Form->input('id_instituicoes',array('type' => 'hidden','value' => $idInstituicao , 'class'=>'form-control')); 
                echo $this->Form->input('data_doacoes',array('type' => 'text','value' => $dataHoje, 'class'=>'form-control')); 
                ?>

            </div>
            <div class="form-group">
                <?php echo $this->Form->label('Doação anônima');?>
                <?php echo $this->Form->checkbox('anonima_doacoes'); ?>
            </div>

            
            <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-success">Limpar</button>
            <a href="/HoraDeDoar/doacoes" class="btn btn-info" role="button">Voltar</a>
            <?php echo $this->Form->end(); ?> 
        </div>
        </div>
    </div>
</div>
</div>

