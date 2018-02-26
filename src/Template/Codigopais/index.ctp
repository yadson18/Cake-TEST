<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Codigopai[]|\Cake\Collection\CollectionInterface $codigopais
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Codigopai'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="codigopais index large-9 medium-8 columns content">
    <h3><?= __('Codigopais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cpais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xpais') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($codigopais as $codigopai): ?>
            <tr>
                <td><?= h($codigopai->cpais) ?></td>
                <td><?= h($codigopai->xpais) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $codigopai->cpais]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $codigopai->cpais]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $codigopai->cpais], ['confirm' => __('Are you sure you want to delete # {0}?', $codigopai->cpais)]) ?>
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
