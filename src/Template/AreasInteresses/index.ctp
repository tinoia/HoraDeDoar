<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Areas de interesse cadastradas</h1>
    </div>
    <!--End Page Header -->
</div>


<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo __('Areas de interesse'); ?>
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
                <?php foreach ($areasInteresses as $areasInteress): ?>
                    <tr>
                        <td><?= $this->Number->format($areasInteress->id_areas_interesses) ?></td>
                        <td><?= h($areasInteress->areas_interesses) ?></td>
                        
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $areasInteress->id_areas_interesses]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areasInteress->id_areas_interesses]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areasInteress->id_areas_interesses], ['confirm' => __('Are you sure you want to delete # {0}?', $areasInteress->id_areas_interesses)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <div class="panel-footer">   
    <a href="/HoraDeDoar/AreasInteresses/add" class="btn btn-info" role="button">Adicionar Nova</a>
    <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
   

    </div>  

</div>
</div>


