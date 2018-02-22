<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro[]|\Cake\Collection\CollectionInterface $cadastro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cadastro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cadastro index large-9 medium-8 columns content">
    <h3><?= __('Cadastro') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('empresa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_cadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fantasia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnpj') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estadual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cae') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endcob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairrocob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cepcob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidadecob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estadocob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('obs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atividade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correspondencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tributacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deslocamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('multdistancia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('multatividade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cadastrado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cadastrado_em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alterado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alterado_em') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('limite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ultimo_venc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atual_venc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prazo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_fatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datanasc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dia_fatuta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('venc_cartao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cartao_proprio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senhacred') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nrend1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nrend2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('e_mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_reg_trib') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipocad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('st_liminar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complementar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tabela_preco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_convenio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nr_convenio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_ctardz') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dia_corte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dia_vencimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('protestar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dias_protestar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trilha1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trilha2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trilha3') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cadastro as $cadastro): ?>
            <tr>
                <td><?= $this->Number->format($cadastro->empresa) ?></td>
                <td><?= $this->Number->format($cadastro->cod_cadastro) ?></td>
                <td><?= h($cadastro->razao) ?></td>
                <td><?= h($cadastro->fantasia) ?></td>
                <td><?= h($cadastro->cnpj) ?></td>
                <td><?= h($cadastro->tipo) ?></td>
                <td><?= h($cadastro->estadual) ?></td>
                <td><?= h($cadastro->municipal) ?></td>
                <td><?= h($cadastro->cae) ?></td>
                <td><?= h($cadastro->endereco) ?></td>
                <td><?= h($cadastro->bairro) ?></td>
                <td><?= h($cadastro->cep) ?></td>
                <td><?= h($cadastro->cidade) ?></td>
                <td><?= h($cadastro->estado) ?></td>
                <td><?= h($cadastro->telefone) ?></td>
                <td><?= h($cadastro->fax) ?></td>
                <td><?= h($cadastro->celular) ?></td>
                <td><?= h($cadastro->contato) ?></td>
                <td><?= h($cadastro->endcob) ?></td>
                <td><?= h($cadastro->bairrocob) ?></td>
                <td><?= h($cadastro->cepcob) ?></td>
                <td><?= h($cadastro->cidadecob) ?></td>
                <td><?= h($cadastro->estadocob) ?></td>
                <td><?= h($cadastro->obs) ?></td>
                <td><?= $this->Number->format($cadastro->atividade) ?></td>
                <td><?= h($cadastro->correspondencia) ?></td>
                <td><?= h($cadastro->tributacao) ?></td>
                <td><?= $this->Number->format($cadastro->comissao) ?></td>
                <td><?= $this->Number->format($cadastro->vendedor) ?></td>
                <td><?= h($cadastro->registro) ?></td>
                <td><?= $this->Number->format($cadastro->deslocamento) ?></td>
                <td><?= h($cadastro->ativo) ?></td>
                <td><?= $this->Number->format($cadastro->multdistancia) ?></td>
                <td><?= $this->Number->format($cadastro->multatividade) ?></td>
                <td><?= $this->Number->format($cadastro->cadastrado_por) ?></td>
                <td><?= h($cadastro->cadastrado_em) ?></td>
                <td><?= $this->Number->format($cadastro->alterado_por) ?></td>
                <td><?= h($cadastro->alterado_em) ?></td>
                <td><?= h($cadastro->area) ?></td>
                <td><?= $this->Number->format($cadastro->limite) ?></td>
                <td><?= h($cadastro->ultimo_venc) ?></td>
                <td><?= h($cadastro->atual_venc) ?></td>
                <td><?= $this->Number->format($cadastro->prazo) ?></td>
                <td><?= h($cadastro->tipo_fatura) ?></td>
                <td><?= h($cadastro->datanasc) ?></td>
                <td><?= h($cadastro->dia_fatuta) ?></td>
                <td><?= h($cadastro->venc_cartao) ?></td>
                <td><?= h($cadastro->cartao_proprio) ?></td>
                <td><?= h($cadastro->senhacred) ?></td>
                <td><?= h($cadastro->nrend1) ?></td>
                <td><?= h($cadastro->nrend2) ?></td>
                <td><?= h($cadastro->e_mail) ?></td>
                <td><?= h($cadastro->cod_reg_trib) ?></td>
                <td><?= h($cadastro->tipocad) ?></td>
                <td><?= h($cadastro->st_liminar) ?></td>
                <td><?= h($cadastro->complementar) ?></td>
                <td><?= $this->Number->format($cadastro->tabela_preco) ?></td>
                <td><?= $this->Number->format($cadastro->id_convenio) ?></td>
                <td><?= h($cadastro->nr_convenio) ?></td>
                <td><?= $this->Number->format($cadastro->cod_ctardz) ?></td>
                <td><?= $this->Number->format($cadastro->dia_corte) ?></td>
                <td><?= $this->Number->format($cadastro->dia_vencimento) ?></td>
                <td><?= h($cadastro->protestar) ?></td>
                <td><?= $this->Number->format($cadastro->dias_protestar) ?></td>
                <td><?= h($cadastro->cpais) ?></td>
                <td><?= h($cadastro->trilha1) ?></td>
                <td><?= h($cadastro->trilha2) ?></td>
                <td><?= h($cadastro->trilha3) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cadastro->cod_cadastro]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadastro->cod_cadastro]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadastro->cod_cadastro], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->cod_cadastro)]) ?>
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
