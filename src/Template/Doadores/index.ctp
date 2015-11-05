<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Doadores cadastrados</h1>
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
                        <th><?php echo $this->Paginator->sort('cpf'); ?></th>
                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th><?php echo $this->Paginator->sort('senha'); ?></th>
                        <th><?php echo $this->Paginator->sort('id_endereço'); ?></th>
                        <th><?php echo $this->Paginator->sort('Opções'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($doadores as $doadore): ?>
                    <tr>
                        <td><?= $this->Number->format($doadore->id_doadores) ?></td>
                        <td><?= h($doadore->nome_doadores) ?></td>
                        <td><?= h($doadore->cpf_doadores) ?></td>
                        <td><?= h($doadore->email_doadores) ?></td>
                        <td><?= h($doadore->senha_doadores) ?></td>
                        <td><?= $this->Number->format($doadore->id_enderecos) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $doadore->id_doadores]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doadore->id_doadores]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doadore->id_doadores], ['confirm' => __('Are you sure you want to delete # {0}?', $doadore->id_doadores)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <div class="panel-footer">
        <a href="/HoraDeDoar/doadores/add" class="btn btn-info" role="button">Adicionar Novo</a>
        <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
    </div>

    <div>   
        
     

    </div>  

</div>
</div>


