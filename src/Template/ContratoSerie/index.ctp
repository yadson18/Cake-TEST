<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContratoSerie[]|\Cake\Collection\CollectionInterface $contratoSerie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contrato Serie'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contratoSerie index large-9 medium-8 columns content">
    <h3><?= __('Contrato Serie') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('seq_contrato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serie_impressora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_ecf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo_impressora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultima_renovacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atualizar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('online') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contratoSerie as $contratoSerie): ?>
            <tr>
                <td><?= $this->Number->format($contratoSerie->seq_contrato) ?></td>
                <td><?= h($contratoSerie->serie_impressora) ?></td>
                <td><?= $this->Number->format($contratoSerie->numero_ecf) ?></td>
                <td><?= h($contratoSerie->modelo_impressora) ?></td>
                <td><?= $this->Number->format($contratoSerie->dias) ?></td>
                <td><?= h($contratoSerie->ultima_renovacao) ?></td>
                <td><?= h($contratoSerie->atualizar) ?></td>
                <td><?= h($contratoSerie->online) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contratoSerie->serie_impressora]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contratoSerie->serie_impressora]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contratoSerie->serie_impressora], ['confirm' => __('Are you sure you want to delete # {0}?', $contratoSerie->serie_impressora)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
