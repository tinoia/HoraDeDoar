
<?php use App\Controller\InstituicoesCotroller;?>

<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Doações recebidas</h1>
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
                        <th><?php echo $this->Paginator->sort('Confirmada'); ?></th>
                        <th><?php echo $this->Paginator->sort('Anonima'); ?></th>
                        <th><?php echo $this->Paginator->sort('Instituição'); ?></th>
                        <th><?php echo $this->Paginator->sort('Opções'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($doacoes as $doaco): ?>
                    <tr>
                        <td><?= $this->Number->format($doaco->id_doacoes) ?></td>
                        <td><?= $this->Number->format($doaco->valor_doacoes) ?></td>
                        <td><?php if(h($doaco->confirmacao_doacoes)==0) {
                                echo"Nao";
                            } else echo"Sim";
                        ?></td>
                        <td><?php if(h($doaco->anonima_doacoes)==0) {
                                echo"Sim";
                            } else echo"Não";
                        ?></td>
                        <td> <?php //$nome = $this->requestAction('InstituicoesController/getNomeByID');?></td>
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
?>