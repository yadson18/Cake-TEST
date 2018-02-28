<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato[]|\Cake\Collection\CollectionInterface $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contrato index large-9 medium-8 columns content">
    <h3><?= __('Contrato') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('seq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_vencimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inclusao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_ativacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_contrato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_ultima_cobranca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_ultima_renovacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('obs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modalidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razao_social') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fantasia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dia_vencimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seq_banco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('master') ?></th>
                <th scope="col"><?= $this->Paginator->sort('analitico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sintetico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_resp_financeiro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_comissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sintegra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('efd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nota_fiscal_eletronica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_termi_adm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hardware') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_vendedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_cancelamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancelado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_envio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contrato as $contrato): ?>
            <tr>
                <td><?= $this->Number->format($contrato->seq) ?></td>
                <td><?= h($contrato->data_vencimento) ?></td>
                <td><?= $this->Number->format($contrato->contratante) ?></td>
                <td><?= h($contrato->data_inclusao) ?></td>
                <td><?= h($contrato->data_ativacao) ?></td>
                <td><?= $this->Number->format($contrato->valor_contrato) ?></td>
                <td><?= h($contrato->data_ultima_cobranca) ?></td>
                <td><?= h($contrato->data_ultima_renovacao) ?></td>
                <td><?= h($contrato->obs) ?></td>
                <td><?= $this->Number->format($contrato->modalidade) ?></td>
                <td><?= h($contrato->razao_social) ?></td>
                <td><?= h($contrato->fantasia) ?></td>
                <td><?= h($contrato->dia_vencimento) ?></td>
                <td><?= $this->Number->format($contrato->status) ?></td>
                <td><?= $this->Number->format($contrato->seq_banco) ?></td>
                <td><?= $this->Number->format($contrato->master) ?></td>
                <td><?= $this->Number->format($contrato->analitico) ?></td>
                <td><?= $this->Number->format($contrato->sintetico) ?></td>
                <td><?= $this->Number->format($contrato->cod_resp_financeiro) ?></td>
                <td><?= $this->Number->format($contrato->valor_comissao) ?></td>
                <td><?= h($contrato->sintegra) ?></td>
                <td><?= h($contrato->efd) ?></td>
                <td><?= h($contrato->nota_fiscal_eletronica) ?></td>
                <td><?= $this->Number->format($contrato->num_termi_adm) ?></td>
                <td><?= h($contrato->hardware) ?></td>
                <td><?= $this->Number->format($contrato->cod_vendedor) ?></td>
                <td><?= h($contrato->data_cancelamento) ?></td>
                <td><?= h($contrato->cancelado) ?></td>
                <td><?= $this->Number->format($contrato->tipo_envio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contrato->seq]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->seq]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->seq], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->seq)]) ?>
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
