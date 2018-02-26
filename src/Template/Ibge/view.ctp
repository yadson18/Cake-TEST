<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ibge $ibge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ibge'), ['action' => 'edit', $ibge->cod_mun]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ibge'), ['action' => 'delete', $ibge->cod_mun], ['confirm' => __('Are you sure you want to delete # {0}?', $ibge->cod_mun)]) ?> </li>
        <li><?= $this->Html->link(__('List Ibge'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ibge'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ibge view large-9 medium-8 columns content">
    <h3><?= h($ibge->cod_mun) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Municipio') ?></th>
            <td><?= h($ibge->nome_municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($ibge->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sigla') ?></th>
            <td><?= h($ibge->sigla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Mun') ?></th>
            <td><?= $this->Number->format($ibge->cod_mun) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Uf') ?></th>
            <td><?= $this->Number->format($ibge->cod_uf) ?></td>
        </tr>
    </table>
</div>
