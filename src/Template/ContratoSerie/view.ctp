<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContratoSerie $contratoSerie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contrato Serie'), ['action' => 'edit', $contratoSerie->serie_impressora]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contrato Serie'), ['action' => 'delete', $contratoSerie->serie_impressora], ['confirm' => __('Are you sure you want to delete # {0}?', $contratoSerie->serie_impressora)]) ?> </li>
        <li><?= $this->Html->link(__('List Contrato Serie'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato Serie'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contratoSerie view large-9 medium-8 columns content">
    <h3><?= h($contratoSerie->serie_impressora) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Serie Impressora') ?></th>
            <td><?= h($contratoSerie->serie_impressora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo Impressora') ?></th>
            <td><?= h($contratoSerie->modelo_impressora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atualizar') ?></th>
            <td><?= h($contratoSerie->atualizar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Online') ?></th>
            <td><?= h($contratoSerie->online) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq Contrato') ?></th>
            <td><?= $this->Number->format($contratoSerie->seq_contrato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Ecf') ?></th>
            <td><?= $this->Number->format($contratoSerie->numero_ecf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias') ?></th>
            <td><?= $this->Number->format($contratoSerie->dias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultima Renovacao') ?></th>
            <td><?= h($contratoSerie->ultima_renovacao) ?></td>
        </tr>
    </table>
</div>
