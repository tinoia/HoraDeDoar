<center>
    <body >
        <div class="panel panel-primary col-lg-6">
            <?php echo $this->Form->create($endereco) ?>

            <div class="panel-heading">
                <h3 class="panel-title">Atualize seus dados</h3>
            </div>

            <div class="panel-body">
                <div class="col-lg-8">
                    <div class="form-group">
                        <?php echo $this->Form->input('cep_enderecos',array('label'=>'CEP','class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('estado_enderecos',array('label'=>'Estado','class'=>'form-control',)); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('cidade_enderecos',array('label'=>'Cidade','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('bairro_enderecos',array('label'=>'Bairro','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('rua_enderecos',array('label'=>'Rua','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('numero_enderecos',array('label'=>'Numero','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('complemento_enderecos',array('label'=>'Complemento','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('mapa_enderecos',array('label'=>'Mapa','class'=>'form-control','type'=>'text')); ?>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href=<?php echo "/HoraDeDoar/doadores/edit/".$_GET['id']?> class="btn btn-danger" role="button">Voltar</a>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
            </div>
        </div>
    </body> 
</center>




