<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tipos de doações cadastrados</h1>
    </div>
    <!--End Page Header -->
</div>


<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo __('Tipos de doação'); ?>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('ID'); ?></th>
                        <th><?php echo $this->Paginator->sort('Descrição'); ?></th>
                        <th><?php echo $this->Paginator->sort('Opções'); ?></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tiposDoacoes as $tiposDoaco): ?>
                    <tr>
                        <td><?= $this->Number->format($tiposDoaco->id_tipos_doacoes) ?></td>
                        <td><?= h($tiposDoaco->tipos_doacoes) ?></td>
                        
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $tiposDoaco->id_tipos_doacoes]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposDoaco->id_tipos_doacoes]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposDoaco->id_tipos_doacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposDoaco->id_tipos_doacoes)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <div class="panel-footer">   
    <a href="/HoraDeDoar/TiposDoacoes/add" class="btn btn-info" role="button">Adicionar Nova</a>
    <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
   

    </div>  

</div>
</div>



