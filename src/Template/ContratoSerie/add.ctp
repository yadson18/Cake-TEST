<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContratoSerie $contratoSerie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contrato Serie'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contratoSerie form large-9 medium-8 columns content">
    <?= $this->Form->create($contratoSerie) ?>
    <fieldset>
        <legend><?= __('Add Contrato Serie') ?></legend>
        <?php
            echo $this->Form->control('seq_contrato');
            echo $this->Form->control('numero_ecf');
            echo $this->Form->control('modelo_impressora');
            echo $this->Form->control('dias');
            echo $this->Form->control('ultima_renovacao');
            echo $this->Form->control('atualizar');
            echo $this->Form->control('online');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
