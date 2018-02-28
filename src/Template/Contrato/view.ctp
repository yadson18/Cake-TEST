<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->seq]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->seq], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->seq)]) ?> </li>
        <li><?= $this->Html->link(__('List Contrato'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contrato view large-9 medium-8 columns content">
    <h3><?= h($contrato->seq) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Obs') ?></th>
            <td><?= h($contrato->obs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razao Social') ?></th>
            <td><?= h($contrato->razao_social) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fantasia') ?></th>
            <td><?= h($contrato->fantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dia Vencimento') ?></th>
            <td><?= h($contrato->dia_vencimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sintegra') ?></th>
            <td><?= h($contrato->sintegra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Efd') ?></th>
            <td><?= h($contrato->efd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota Fiscal Eletronica') ?></th>
            <td><?= h($contrato->nota_fiscal_eletronica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hardware') ?></th>
            <td><?= h($contrato->hardware) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelado') ?></th>
            <td><?= h($contrato->cancelado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq') ?></th>
            <td><?= $this->Number->format($contrato->seq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contratante') ?></th>
            <td><?= $this->Number->format($contrato->contratante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Contrato') ?></th>
            <td><?= $this->Number->format($contrato->valor_contrato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modalidade') ?></th>
            <td><?= $this->Number->format($contrato->modalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($contrato->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq Banco') ?></th>
            <td><?= $this->Number->format($contrato->seq_banco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Master') ?></th>
            <td><?= $this->Number->format($contrato->master) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Analitico') ?></th>
            <td><?= $this->Number->format($contrato->analitico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sintetico') ?></th>
            <td><?= $this->Number->format($contrato->sintetico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Resp Financeiro') ?></th>
            <td><?= $this->Number->format($contrato->cod_resp_financeiro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Comissao') ?></th>
            <td><?= $this->Number->format($contrato->valor_comissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Termi Adm') ?></th>
            <td><?= $this->Number->format($contrato->num_termi_adm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Vendedor') ?></th>
            <td><?= $this->Number->format($contrato->cod_vendedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Envio') ?></th>
            <td><?= $this->Number->format($contrato->tipo_envio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Vencimento') ?></th>
            <td><?= h($contrato->data_vencimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inclusao') ?></th>
            <td><?= h($contrato->data_inclusao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Ativacao') ?></th>
            <td><?= h($contrato->data_ativacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Ultima Cobranca') ?></th>
            <td><?= h($contrato->data_ultima_cobranca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Ultima Renovacao') ?></th>
            <td><?= h($contrato->data_ultima_renovacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Cancelamento') ?></th>
            <td><?= h($contrato->data_cancelamento) ?></td>
        </tr>
    </table>
</div>
