<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Usuários cadastrados</h1>
    </div>
    <!--End Page Header -->
</div>


<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo __('Doadores'); ?>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('nome'); ?></th>
                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th><?php echo $this->Paginator->sort('senha'); ?></th>
                        <th><?php echo $this->Paginator->sort('tipo'); ?></th>
                       
                        <th><?php echo $this->Paginator->sort('Opções'); ?></th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->iduser) ?></td>
                        <td><?= h($user->name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->type) ?></td>
                        
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->iduser]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->iduser]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->iduser], ['confirm' => __('Are you sure you want to delete # {0}?', $user->iduser)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <div class="panel-footer">
        <a href="/HoraDeDoar/users/add" class="btn btn-info" role="button">Adicionar Novo</a>
        <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
    </div>

    <div>   
        
     

    </div>  

</div>
</div>


