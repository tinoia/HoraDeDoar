<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções:') ?></li>
        <li><?= $this->Html->link(__('Adicionar Doador'), ['action' => 'add']) ?></li>
    </ul>
</nav>



<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo __('Doadores Cadastrados'); ?>
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

    </div>
</div>
<?php
echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
));
?>	</p>
<div class="paging">
    <?php
    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ''));
    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>