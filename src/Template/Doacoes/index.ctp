
<?php use App\Controller\InstituicoesCotroller;?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Minhas Doações</h1>
    </div>
    <!--End Page Header -->
</div>
<?php
$session = $this->request->session();
$tipoUsuario = $session->read('Auth.User.type');

if($tipoUsuario=="Doador"){?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo __('Doações'); ?>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('ID'); ?></th>
                        <th><?php echo $this->Paginator->sort('Valor'); ?></th>
                        <th><?php echo $this->Paginator->sort('Situação'); ?></th>
                        <th><?php echo $this->Paginator->sort('Tipo'); ?></th>
                        <th><?php echo $this->Paginator->sort('Instituição Destino'); ?></th>
                        <th><?php echo $this->Paginator->sort('Data'); ?></th>
                        <th><?php echo $this->Paginator->sort('Opções'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($doacoes as $doaco): ?>
                    
                    <?php if(h($doaco->confirmacao_doacoes)==1) {
                        echo "<tr class=\"success\">";
                    } else echo "<tr class=\"warning\">";
                    ?>

                    <td><?= $this->Number->format($doaco->id_doacoes) ?></td>
                    <td><?= $this->Number->format($doaco->valor_doacoes) ?></td>
                    <td><?php if(h($doaco->confirmacao_doacoes)==0) {
                        echo"Aguardando confirmação";
                    } else echo"Confirmada";
                    ?></td>
                    <td ><?php if(h($doaco->anonima_doacoes)==0) {
                        echo"Normal";
                    } else echo"Anônima";
                    ?></td>
                    <td > <?php 
                    $conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
                    mysql_select_db("novo", $conecta);
                    $todos = mysql_query("SELECT (nome_instituicoes) FROM instituicoes WHERE id_instituicoes=$doaco->id_instituicoes");
                    $todos=mysql_fetch_assoc($todos);
                    echo $todos['nome_instituicoes'];
                    ?></td>
                    <td><?php echo h($doaco->data_doacoes) ?> </td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $doaco->id_doacoes]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doaco->id_doacoes]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doaco->id_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $doaco->id_doacoes)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<div class="panel-footer">
    <a href="/HoraDeDoar/doacoes/add" class="btn btn-info" role="button">Adicionar Novo</a>
    <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
</div>
</div>
</div>

<?php
}

else {?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <center><?php echo __('Doações'); ?></center>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr><center>
                        <th><center><?php echo $this->Paginator->sort('ID'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Doador'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Valor'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Data'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Pagamento'); ?></center></th>
                        </center>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($doacoes as $doaco): ?>
                    
                    <?php if(h($doaco->confirmacao_doacoes)==1) {
                        echo "<tr class=\"success\">";
                    } else echo "<tr class=\"warning\">";
                    ?>

                    <td><center><?= $this->Number->format($doaco->id_doacoes) ?></center></td>

                    <td ><center><?php if(h($doaco->anonima_doacoes)==0) {
                         $conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
                         mysql_select_db("novo", $conecta);
                         $todos = mysql_query("SELECT (nome_doadores) FROM doadores WHERE id_doadores=$doaco->id_doadores");
                         $todos=mysql_fetch_assoc($todos);
                         echo $todos['nome_doadores'];
                    } else echo"Anônima";
                    ?></center></td>

                    <td><center><?= $this->Number->format($doaco->valor_doacoes) ?>/<center></td>

                     <td><center><?php echo h($doaco->data_doacoes) ?></center> </td>

                    <td><center><?php if(h($doaco->confirmacao_doacoes)==0) {
                                ?><div>
                                <a href="http://localhost/HoraDeDoar/Users/opcao" class="btn btn-sm btn-success">Pagou</a> <a href="http://localhost/HoraDeDoar/Users/opcao" class="btn btn-sm btn-danger">Não pagou</a>
                            </div>
                                <?php
                    } else echo"Confirmada";
                    ?></center></td>
                    

                   

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<div class="panel-footer">
    <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
</div>
</div>
</div>

<?php
}
?>











