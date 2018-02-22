<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colaborador[]|\Cake\Collection\CollectionInterface $colaborador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Colaborador'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="colaborador index large-9 medium-8 columns content">
    <h3><?= __('Colaborador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_colaborador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conectado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('local') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($colaborador as $colaborador): ?>
            <tr>
                <td><?= $this->Number->format($colaborador->cod_colaborador) ?></td>
                <td><?= h($colaborador->nome) ?></td>
                <td><?= h($colaborador->telefone) ?></td>
                <td><?= h($colaborador->cpf) ?></td>
                <td><?= h($colaborador->uf) ?></td>
                <td><?= h($colaborador->login) ?></td>
                <td><?= h($colaborador->senha) ?></td>
                <td><?= h($colaborador->ativo) ?></td>
                <td><?= $this->Number->format($colaborador->cod_cadastro) ?></td>
                <td><?= h($colaborador->conectado) ?></td>
                <td><?= h($colaborador->local) ?></td>
                <td><?= h($colaborador->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $colaborador->cod_colaborador]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colaborador->cod_colaborador]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $colaborador->cod_colaborador], ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->cod_colaborador)]) ?>
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
