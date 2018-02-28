<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta[]|\Cake\Collection\CollectionInterface $contas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Conta'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contas index large-9 medium-8 columns content">
    <h3><?= __('Contas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('seq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_emissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_venc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_pagamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('juros') ?></th>
                <th scope="col"><?= $this->Paginator->sort('multa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desconto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('integral') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cfop') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_movimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancelado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plano_conta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_cobranca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forma_pagamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_pago') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_comissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_pagar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cadastrado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cadastrado_em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alterado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alterado_em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_conta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_colaborador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sintetico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('analitico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_custo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seq_banco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nr_cheque') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_finalizadora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caixa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nosso_numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote_remessa') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contas as $conta): ?>
            <tr>
                <td><?= $this->Number->format($conta->seq) ?></td>
                <td><?= $this->Number->format($conta->responsavel) ?></td>
                <td><?= h($conta->data_emissao) ?></td>
                <td><?= h($conta->data_venc) ?></td>
                <td><?= h($conta->data_pagamento) ?></td>
                <td><?= h($conta->descricao) ?></td>
                <td><?= $this->Number->format($conta->valor) ?></td>
                <td><?= $this->Number->format($conta->juros) ?></td>
                <td><?= $this->Number->format($conta->multa) ?></td>
                <td><?= $this->Number->format($conta->desconto) ?></td>
                <td><?= h($conta->integral) ?></td>
                <td><?= h($conta->documento) ?></td>
                <td><?= h($conta->cfop) ?></td>
                <td><?= $this->Number->format($conta->tipo_movimento) ?></td>
                <td><?= h($conta->cancelado) ?></td>
                <td><?= h($conta->plano_conta) ?></td>
                <td><?= $this->Number->format($conta->tipo_cobranca) ?></td>
                <td><?= $this->Number->format($conta->empresa) ?></td>
                <td><?= $this->Number->format($conta->forma_pagamento) ?></td>
                <td><?= $this->Number->format($conta->comissao) ?></td>
                <td><?= $this->Number->format($conta->valor_pago) ?></td>
                <td><?= h($conta->data_comissao) ?></td>
                <td><?= $this->Number->format($conta->total_pagar) ?></td>
                <td><?= $this->Number->format($conta->cadastrado_por) ?></td>
                <td><?= h($conta->cadastrado_em) ?></td>
                <td><?= $this->Number->format($conta->alterado_por) ?></td>
                <td><?= h($conta->alterado_em) ?></td>
                <td><?= h($conta->tipo_conta) ?></td>
                <td><?= $this->Number->format($conta->cod_colaborador) ?></td>
                <td><?= $this->Number->format($conta->sintetico) ?></td>
                <td><?= $this->Number->format($conta->analitico) ?></td>
                <td><?= $this->Number->format($conta->centro_custo) ?></td>
                <td><?= $this->Number->format($conta->seq_banco) ?></td>
                <td><?= h($conta->nr_cheque) ?></td>
                <td><?= $this->Number->format($conta->cod_finalizadora) ?></td>
                <td><?= h($conta->caixa) ?></td>
                <td><?= h($conta->nosso_numero) ?></td>
                <td><?= h($conta->lote_remessa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $conta->seq]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conta->seq]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conta->seq], ['confirm' => __('Are you sure you want to delete # {0}?', $conta->seq)]) ?>
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
