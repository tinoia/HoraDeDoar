<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Doações cadastradas</h1>
    </div>
    <!--End Page Header -->
</div>


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
                        <th><?php echo $this->Paginator->sort('Confirmada'); ?></th>
                        <th><?php echo $this->Paginator->sort('Anonima'); ?></th>
                        <th><?php echo $this->Paginator->sort('ID doador'); ?></th>
                        <th><?php echo $this->Paginator->sort('ID instituicao'); ?></th>
                        <th><?php echo $this->Paginator->sort('Opções'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($doacoes as $doaco): ?>
                    <tr>
                        <td><?= $this->Number->format($doaco->id_doacoes) ?></td>
                        <td><?= h($doaco->valor_doacoes) ?></td>
                        <td><?= h($doaco->confirmacao_doacoes) ?></td>
                        <td><?= h($doaco->anonima_doacoes) ?></td>
                        <td><?= $this->Number->format($doaco->id_doadores) ?></td>
                        <td><?= $this->Number->format($doaco->id_instituicoes) ?></td>
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

    <div>   
    <?php 
    
    $conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
    mysql_select_db("novo", $conecta);

    $Dinheiro=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '1' 
                            AND d.confirmacao_doacoes = '1'");
    $Dinheiro=mysql_fetch_assoc($Dinheiro);
 

    $Alimento=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '2' 
                            AND d.confirmacao_doacoes = '1'");
    $Alimento=mysql_fetch_assoc($Alimento);

    $Brinquedo=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '3' 
                            AND d.confirmacao_doacoes = '1'");
    $Brinquedo=mysql_fetch_assoc($Brinquedo);
    $Roupa=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '4' 
                            AND d.confirmacao_doacoes = '1'");
    $Roupa=mysql_fetch_assoc($Roupa);
    $Plimpeza=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '5' 
                            AND d.confirmacao_doacoes = '1'");
    $Plimpeza=mysql_fetch_assoc($Plimpeza);
    $Phigiene=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '6' 
                            AND d.confirmacao_doacoes = '1'");
    $Phigiene=mysql_fetch_assoc($Phigiene);
    $eletrodomestico=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '7' 
                            AND d.confirmacao_doacoes = '1'");
    $eletrodomestico=mysql_fetch_assoc($eletrodomestico);
    $moveis=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '8' 
                            AND d.confirmacao_doacoes = '1'");
    $moveis=mysql_fetch_assoc($moveis);
    $ainfo=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '9' 
                            AND d.confirmacao_doacoes = '1'");
    $ainfo=mysql_fetch_assoc($ainfo);
    $outro=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
                            FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
                            ON d.id_doacoes = n.id_doacoes
                            INNER JOIN tipos_doacoes t
                            ON n.id_tipos_doacoes = t.id_tipos_doacoes
                            WHERE n.id_tipos_doacoes = '10' 
                            AND d.confirmacao_doacoes = '1'");
    $outro=mysql_fetch_assoc($outro);
?>

<div class="box">
    <div class="box-chart">
        <canvas id="GraficoPizza" style="width:100%;"></canvas>
        
        <script type="text/javascript">
            $Dinheiro = parseInt($Dinheiro = "<?php echo $Dinheiro['COUNT(n.id_tipos_doacoes)'] ?>");
            $Alimento = parseInt($Alimento = "<?php echo $Alimento['COUNT(n.id_tipos_doacoes)'] ?>");
            $Brinquedo = parseInt($Brinquedo = "<?php echo $Brinquedo['COUNT(n.id_tipos_doacoes)'] ?>");
            $Roupa = parseInt($Roupa = "<?php echo $Roupa['COUNT(n.id_tipos_doacoes)'] ?>");
            $Plimpeza = parseInt($Plimpeza = "<?php echo $Plimpeza['COUNT(n.id_tipos_doacoes)'] ?>");
            $Phigiene = parseInt($Phigiene = "<?php echo $Phigiene['COUNT(n.id_tipos_doacoes)'] ?>");
            $eletrodomestico = parseInt($eletrodomestico = "<?php echo $eletrodomestico['COUNT(n.id_tipos_doacoes)'] ?>");
            $moveis = parseInt($moveis = "<?php echo $moveis['COUNT(n.id_tipos_doacoes)'] ?>");
            $ainfo = parseInt($ainfo = "<?php echo $ainfo['COUNT(n.id_tipos_doacoes)'] ?>");
            $outro = parseInt($outro = "<?php echo $outro['COUNT(n.id_tipos_doacoes)'] ?>");
            
            var options1 = {
                responsive:true
            };
               
            var data1 = [
                {
                    value: $Dinheiro,
                    color: "#46BFBD",
                    highlight: "#FFFFFF",
                    label: "Dinheiro"
                },
                {
                    value: $Alimento,
                    color:"#F7464A",
                    highlight: "#FFFFFF",
                    label: "Alimentos"
                },
                {
                    value: $Brinquedo,
                    color: "#227788",
                    highlight: "#FFFFFF",
                    label: "Brinquedos"
                },
                {
                    value: $Roupa,
                    color: "#AA12D5",
                    highlight: "#FFFFFF",
                    label: "Roupas"
                },
                {
                    value: $Plimpeza,
                    color: "#555555",
                    highlight: "#FFFFFF",
                    label: "Produtos de limpeza"
                },
                {
                    value: $Phigiene,
                    color: "#777777",
                    highlight: "#FFFFFF",
                    label: "Produtos de higiene"
                },
                {
                    value: $eletrodomestico,
                    color: "#999999",
                    highlight: "#FFFFFF",
                    label: "Eletrodomésticos"
                },
                {
                    value: $moveis,
                    color: "#BBBBBB",
                    highlight: "#FFFFFF",
                    label: "Móveis"
                },
                {
                    value: $ainfo,
                    color: "#8542AA",
                    highlight: "#FFFFFF",
                    label: "Artigos de Informática"
                },
                {
                    value: $outro,
                    color: "#005687",
                    highlight: "#FFFFFF",
                    label: "Outros"
                },
            ]
        </script>  
        
    </div>
</div>
     

    </div>  

</div>
</div>


