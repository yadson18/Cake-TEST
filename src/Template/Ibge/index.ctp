<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ibge[]|\Cake\Collection\CollectionInterface $ibge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ibge'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ibge index large-9 medium-8 columns content">
    <h3><?= __('Ibge') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_mun') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sigla') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_uf') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ibge as $ibge): ?>
            <tr>
                <td><?= $this->Number->format($ibge->cod_mun) ?></td>
                <td><?= h($ibge->nome_municipio) ?></td>
                <td><?= h($ibge->estado) ?></td>
                <td><?= h($ibge->sigla) ?></td>
                <td><?= $this->Number->format($ibge->cod_uf) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ibge->cod_mun]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ibge->cod_mun]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ibge->cod_mun], ['confirm' => __('Are you sure you want to delete # {0}?', $ibge->cod_mun)]) ?>
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
