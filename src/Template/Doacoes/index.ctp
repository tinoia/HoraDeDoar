
<?php use App\Controller\InstituicoesCotroller;?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Minhas Doações</h1>
    </div>
    <!--End Page Header -->
</div>
<?php
$conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
mysql_select_db("novo", $conecta);
$session = $this->request->session();
$tipoUsuario = $session->read('Auth.User.type');

if($tipoUsuario=="Doador"){?>

<div class="panel panel-primary">
    <div class="panel-heading"><center>
        <?php echo __('Doações'); ?></center>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th><center><?php echo $this->Paginator->sort('ID'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Doação'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Situação'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Tipo'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Instituição Destino'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Data'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Opções'); ?></center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($doacoes as $doaco): ?>
                    
                    <?php if(h($doaco->confirmacao_doacoes)==1) {
                        echo "<tr class=\"success\">";
                    } else if(h($doaco->confirmacao_doacoes)==0){
                        echo "<tr class=\"warning\">";
                    } else echo "<tr class=\"danger\">";
                    ?>
                    <td><center><?= $this->Number->format($doaco->id_doacoes) ?></center></td>
                    <td><center><?php if($doaco->tipo_doacoes==1){
                        echo "R$".$this->Number->format($doaco->valor_doacoes).",00"; 
                    } else{
                        $objeto = mysql_query("SELECT tipos_doacoes FROM tipos_doacoes WHERE id_tipos_doacoes=$doaco->tipo_doacoes");
                        $objeto = mysql_fetch_assoc($objeto);
                        echo $objeto['tipos_doacoes'];
                    }


                    ?></center></td>
                    <td><center><?php if(h($doaco->confirmacao_doacoes)==0) {
                        echo"Aguardando confirmação";
                    } else if(h($doaco->confirmacao_doacoes)==1){
                        echo "Confirmada";
                    } else echo"Recusadas";
                    ?></center></td>
                    <td><center><?php if(h($doaco->anonima_doacoes)==0) {
                        echo"Normal";
                    } else  echo"Anônima";
                    ?></center></td>
                    <td><center><?php 
                    
                    $todos = mysql_query("SELECT (nome_instituicoes) FROM instituicoes WHERE id_instituicoes=$doaco->id_instituicoes");
                    $todos=mysql_fetch_assoc($todos);
                    echo $todos['nome_instituicoes'];
                    ?></center></td>
                    <td><center><?php echo h(date_format($doaco->data_doacoes, "d/m/Y")) ?></center> </td>
                    <td class="actions">
                        <?= $this->Form->postLink(__('Cancelar'), ['action' => 'delete', $doaco->id_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $doaco->id_doacoes)]) ?>
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
                        <th><center><?php echo $this->Paginator->sort('Doação'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Doador'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Data'); ?></center></th>
                        <th><center><?php echo $this->Paginator->sort('Pagamento'); ?></center></th>
                    </center>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doacoes as $doaco): ?>

                <?php if(h($doaco->confirmacao_doacoes)==1) {
                    echo "<tr class=\"success\">";
                } else if(h($doaco->confirmacao_doacoes)==0){
                    echo "<tr class=\"warning\">";
                } else echo "<tr class=\"danger\">";
                ?>

                <td><center><?= $this->Number->format($doaco->id_doacoes) ?></center></td>

                <td><center><?php if($doaco->tipo_doacoes==1){
                    echo "R$".$this->Number->format($doaco->valor_doacoes).",00"; 
                } else{
                    $objeto = mysql_query("SELECT tipos_doacoes FROM tipos_doacoes WHERE id_tipos_doacoes=$doaco->tipo_doacoes");
                    $objeto = mysql_fetch_assoc($objeto);
                    echo $objeto['tipos_doacoes'];
                } ?><center></td>
                
                <td ><center><?php if(h($doaco->anonima_doacoes)==0) {

                 $todos = mysql_query("SELECT (nome_doadores) FROM doadores WHERE id_doadores=$doaco->id_doadores");
                 $todos = mysql_fetch_assoc($todos);
                 echo $todos['nome_doadores'];
             } else echo"Anônima";
             ?></center></td>

             

             <td><center><?php echo h($doaco->data_doacoes) ?></center> </td>

             <td><center><?php if(h($doaco->confirmacao_doacoes)==0) {

                ?><div>
                <a href= <?php echo "http://localhost/HoraDeDoar/Doacoes/confirmar_pagamento/".$doaco->id_doacoes?> class="btn btn-sm btn-success">Pagou</a>
                <a href= <?php echo "http://localhost/HoraDeDoar/Doacoes/recusar_pagamento/".$doaco->id_doacoes?> class="btn btn-sm btn-danger">Não pagou</a>
            </div>
            <?php
        } else if (h($doaco->confirmacao_doacoes)==1) {
            echo"Confirmada";
        } else echo "Recusada";
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











