<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Areas de atuação cadastradas</h1>
    </div>
    <!--End Page Header -->
</div>


<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo __('Areas de atuação'); ?>
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
                    <?php foreach ($areasAtuacoes as $areasAtuaco): ?>
                    <tr>
                        <td><?= $this->Number->format($areasAtuaco->id_areas_atuacoes) ?></td>
                        <td><?= h($areasAtuaco->areas_atuacoes) ?></td>
                        
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $areasAtuaco->id_areas_atuacoes]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areasAtuaco->id_areas_atuacoes]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areasAtuaco->id_areas_atuacoes], ['confirm' => __('Are you sure you want to delete # {0}?', $areasAtuaco->id_areas_atuacoes)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

     <div class="panel-footer">
        <a href="/HoraDeDoar/AreasAtuacoes/add" class="btn btn-info" role="button">Adicionar Nova</a>
        <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
    </div>
      

</div>
</div>



