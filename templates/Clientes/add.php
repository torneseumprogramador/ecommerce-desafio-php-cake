<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="clientes form content">
    <?= $this->Html->link(__('Voltar para lista de clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>

    <?= $this->Form->create($cliente, ['class' => 'form-horizontal']) ?>
    <fieldset>
        <legend><?= __('Adicionar Cliente') ?></legend>
        <?= $this->element('../Clientes/_form_fields') ?>
    </fieldset>
    <div class="form-group">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
