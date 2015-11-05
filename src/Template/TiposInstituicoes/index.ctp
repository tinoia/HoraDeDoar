<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tipos de instituições cadastrados</h1>
    </div>
    <!--End Page Header -->
</div>


<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo __('Tipos de instituição'); ?>
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
                    <?php foreach ($tiposInstituicoes as $tiposInstituico): ?>
                    <tr>
                        <td><?= $this->Number->format($tiposInstituico->id_tipos_instituicoes) ?></td>
                        <td><?= h($tiposInstituico->tipos_instituicoes) ?></td>
                        
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $tiposInstituico->id_tipos_instituicoes]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposInstituico->id_tipos_instituicoes]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposInstituico->id_tipos_instituicoes], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposInstituico->id_tipos_instituicoes)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <div class="panel-footer">   
    <a href="/HoraDeDoar/TiposInstituicoes/add" class="btn btn-info" role="button">Adicionar Nova</a>
    <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
   
    </div>  

</div>
</div>


