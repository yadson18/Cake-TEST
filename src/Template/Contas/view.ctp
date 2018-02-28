<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conta'), ['action' => 'edit', $conta->seq]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conta'), ['action' => 'delete', $conta->seq], ['confirm' => __('Are you sure you want to delete # {0}?', $conta->seq)]) ?> </li>
        <li><?= $this->Html->link(__('List Contas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conta'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contas view large-9 medium-8 columns content">
    <h3><?= h($conta->seq) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($conta->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Integral') ?></th>
            <td><?= h($conta->integral) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documento') ?></th>
            <td><?= h($conta->documento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cfop') ?></th>
            <td><?= h($conta->cfop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelado') ?></th>
            <td><?= h($conta->cancelado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plano Conta') ?></th>
            <td><?= h($conta->plano_conta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Conta') ?></th>
            <td><?= h($conta->tipo_conta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nr Cheque') ?></th>
            <td><?= h($conta->nr_cheque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caixa') ?></th>
            <td><?= h($conta->caixa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nosso Numero') ?></th>
            <td><?= h($conta->nosso_numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote Remessa') ?></th>
            <td><?= h($conta->lote_remessa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq') ?></th>
            <td><?= $this->Number->format($conta->seq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= $this->Number->format($conta->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($conta->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Juros') ?></th>
            <td><?= $this->Number->format($conta->juros) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Multa') ?></th>
            <td><?= $this->Number->format($conta->multa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desconto') ?></th>
            <td><?= $this->Number->format($conta->desconto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Movimento') ?></th>
            <td><?= $this->Number->format($conta->tipo_movimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Cobranca') ?></th>
            <td><?= $this->Number->format($conta->tipo_cobranca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($conta->empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Forma Pagamento') ?></th>
            <td><?= $this->Number->format($conta->forma_pagamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comissao') ?></th>
            <td><?= $this->Number->format($conta->comissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Pago') ?></th>
            <td><?= $this->Number->format($conta->valor_pago) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Pagar') ?></th>
            <td><?= $this->Number->format($conta->total_pagar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cadastrado Por') ?></th>
            <td><?= $this->Number->format($conta->cadastrado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alterado Por') ?></th>
            <td><?= $this->Number->format($conta->alterado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Colaborador') ?></th>
            <td><?= $this->Number->format($conta->cod_colaborador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sintetico') ?></th>
            <td><?= $this->Number->format($conta->sintetico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Analitico') ?></th>
            <td><?= $this->Number->format($conta->analitico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro Custo') ?></th>
            <td><?= $this->Number->format($conta->centro_custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq Banco') ?></th>
            <td><?= $this->Number->format($conta->seq_banco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Finalizadora') ?></th>
            <td><?= $this->Number->format($conta->cod_finalizadora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Emissao') ?></th>
            <td><?= h($conta->data_emissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Venc') ?></th>
            <td><?= h($conta->data_venc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Pagamento') ?></th>
            <td><?= h($conta->data_pagamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Comissao') ?></th>
            <td><?= h($conta->data_comissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cadastrado Em') ?></th>
            <td><?= h($conta->cadastrado_em) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alterado Em') ?></th>
            <td><?= h($conta->alterado_em) ?></td>
        </tr>
    </table>
</div>
