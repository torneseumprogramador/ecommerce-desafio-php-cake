<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>

<div class="clientes form content">

    <div style="text-align:right">
    <?= $this->Form->postLink(
        __('Excluir'),
        ['action' => 'delete', $cliente->id],
        ['confirm' => __('Tem certeza que deseja apagar o cliente de ID # {0}?', $cliente->id), 'class' => 'btn btn-danger']
    ) ?>
    </div>

    <?= $this->Html->link(__('Voltar para lista de clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>

    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Editando Cliente: ' . $cliente->nome) ?></legend>
        <?= $this->element('../Clientes/_form_fields') ?>
    </fieldset>
    <div class="form-group">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>