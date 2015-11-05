<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Instituições Cadastradas</h1>
    </div>
    <!--End Page Header -->
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo __('Instituições'); ?>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('ID'); ?></th>
                        <th><?php echo $this->Paginator->sort('Nome'); ?></th>
                        <th><?php echo $this->Paginator->sort('CNPJ'); ?></th>
                        <th><?php echo $this->Paginator->sort('Email'); ?></th>
                        <th><?php echo $this->Paginator->sort('Senha'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($instituicoes as $instituico): ?>
                    <tr>
                        <td><?= $this->Number->format($instituicoes->id_instituicoes) ?></td>
                        <td><?= h($instituicoes->nome_instituicoes) ?></td>
                        <td><?= h($instituicoes->cnpj_instituicoes) ?></td>
                        <td><?= h($instituicoes->email_instituicoes) ?></td>
                        <td><?= h($instituicoes->senha_instituicoes) ?></td>
                        
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $instituicoes->id_instituicoes]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instituicoes->id_instituicoes]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instituico->id_instituicoes], ['confirm' => __('Are you sure you want to delete # {0}?', $instituico->id_instituicoes)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <div>   
    <a href="/HoraDeDoar/Instituicoes/add" class="btn btn-info" role="button">Adicionar Instituição</a>
    <a href="/HoraDeDoar" class="btn btn-info" role="button">Voltar</a>
   
    </div>  

</div>
</div>


