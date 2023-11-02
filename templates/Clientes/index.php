<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cliente> $clientes
 */
?>
<div class="clientes index content">
    <div style="text-align:right;">
        <?= $this->Html->link(__('Novo Cliente'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>
    <h1 style="text-align:center">Lista de clientes</h1>
    <hr>
    <div class="table-responsive">
        <table class="table" style="border: 1px solid #ccc">
            <thead>
                <tr style="background-color: #d2d2d2">
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->nome) ?></td>
                    <td><?= h($cliente->telefone) ?></td>
                    <td><?= h($cliente->email) ?></td>
                    <td class="actions" style="width:240px">
                        <?= $this->Html->link(__('Mostrar'), ['action' => 'view', $cliente->id], ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id], ['class' => 'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $cliente->id], ['class' => 'btn btn-danger'], ['confirm' => __('Confirma a exclusão do cliente de ID # {0}?', $cliente->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira página')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Última página') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total {{count}}')) ?></p>
    </div>
</div>
