<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro $cadastro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cadastro'), ['action' => 'edit', $cadastro->cod_cadastro]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cadastro'), ['action' => 'delete', $cadastro->cod_cadastro], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->cod_cadastro)]) ?> </li>
        <li><?= $this->Html->link(__('List Cadastro'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cadastro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cadastro view large-9 medium-8 columns content">
    <h3><?= h($cadastro->cod_cadastro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Razao') ?></th>
            <td><?= h($cadastro->razao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fantasia') ?></th>
            <td><?= h($cadastro->fantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($cadastro->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($cadastro->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estadual') ?></th>
            <td><?= h($cadastro->estadual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipal') ?></th>
            <td><?= h($cadastro->municipal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cae') ?></th>
            <td><?= h($cadastro->cae) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($cadastro->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($cadastro->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($cadastro->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($cadastro->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($cadastro->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($cadastro->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($cadastro->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($cadastro->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($cadastro->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endcob') ?></th>
            <td><?= h($cadastro->endcob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairrocob') ?></th>
            <td><?= h($cadastro->bairrocob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cepcob') ?></th>
            <td><?= h($cadastro->cepcob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidadecob') ?></th>
            <td><?= h($cadastro->cidadecob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estadocob') ?></th>
            <td><?= h($cadastro->estadocob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Obs') ?></th>
            <td><?= h($cadastro->obs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correspondencia') ?></th>
            <td><?= h($cadastro->correspondencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tributacao') ?></th>
            <td><?= h($cadastro->tributacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registro') ?></th>
            <td><?= h($cadastro->registro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($cadastro->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= h($cadastro->area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Fatura') ?></th>
            <td><?= h($cadastro->tipo_fatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datanasc') ?></th>
            <td><?= h($cadastro->datanasc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dia Fatuta') ?></th>
            <td><?= h($cadastro->dia_fatuta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cartao Proprio') ?></th>
            <td><?= h($cadastro->cartao_proprio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senhacred') ?></th>
            <td><?= h($cadastro->senhacred) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nrend1') ?></th>
            <td><?= h($cadastro->nrend1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nrend2') ?></th>
            <td><?= h($cadastro->nrend2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E Mail') ?></th>
            <td><?= h($cadastro->e_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Reg Trib') ?></th>
            <td><?= h($cadastro->cod_reg_trib) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipocad') ?></th>
            <td><?= h($cadastro->tipocad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('St Liminar') ?></th>
            <td><?= h($cadastro->st_liminar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complementar') ?></th>
            <td><?= h($cadastro->complementar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nr Convenio') ?></th>
            <td><?= h($cadastro->nr_convenio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Protestar') ?></th>
            <td><?= h($cadastro->protestar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpais') ?></th>
            <td><?= h($cadastro->cpais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trilha1') ?></th>
            <td><?= h($cadastro->trilha1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trilha2') ?></th>
            <td><?= h($cadastro->trilha2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trilha3') ?></th>
            <td><?= h($cadastro->trilha3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($cadastro->empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Cadastro') ?></th>
            <td><?= $this->Number->format($cadastro->cod_cadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atividade') ?></th>
            <td><?= $this->Number->format($cadastro->atividade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comissao') ?></th>
            <td><?= $this->Number->format($cadastro->comissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendedor') ?></th>
            <td><?= $this->Number->format($cadastro->vendedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deslocamento') ?></th>
            <td><?= $this->Number->format($cadastro->deslocamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Multdistancia') ?></th>
            <td><?= $this->Number->format($cadastro->multdistancia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Multatividade') ?></th>
            <td><?= $this->Number->format($cadastro->multatividade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cadastrado Por') ?></th>
            <td><?= $this->Number->format($cadastro->cadastrado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alterado Por') ?></th>
            <td><?= $this->Number->format($cadastro->alterado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Limite') ?></th>
            <td><?= $this->Number->format($cadastro->limite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prazo') ?></th>
            <td><?= $this->Number->format($cadastro->prazo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tabela Preco') ?></th>
            <td><?= $this->Number->format($cadastro->tabela_preco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Convenio') ?></th>
            <td><?= $this->Number->format($cadastro->id_convenio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Ctardz') ?></th>
            <td><?= $this->Number->format($cadastro->cod_ctardz) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dia Corte') ?></th>
            <td><?= $this->Number->format($cadastro->dia_corte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dia Vencimento') ?></th>
            <td><?= $this->Number->format($cadastro->dia_vencimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias Protestar') ?></th>
            <td><?= $this->Number->format($cadastro->dias_protestar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cadastrado Em') ?></th>
            <td><?= h($cadastro->cadastrado_em) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alterado Em') ?></th>
            <td><?= h($cadastro->alterado_em) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultimo Venc') ?></th>
            <td><?= h($cadastro->ultimo_venc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atual Venc') ?></th>
            <td><?= h($cadastro->atual_venc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Venc Cartao') ?></th>
            <td><?= h($cadastro->venc_cartao) ?></td>
        </tr>
    </table>
</div>
