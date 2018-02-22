<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro $cadastro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cadastro->cod_cadastro],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cadastro->cod_cadastro)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cadastro'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastro form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastro) ?>
    <fieldset>
        <legend><?= __('Edit Cadastro') ?></legend>
        <?php
            echo $this->Form->control('empresa');
            echo $this->Form->control('razao');
            echo $this->Form->control('fantasia');
            echo $this->Form->control('cnpj');
            echo $this->Form->control('tipo');
            echo $this->Form->control('estadual');
            echo $this->Form->control('municipal');
            echo $this->Form->control('cae');
            echo $this->Form->control('endereco');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cep');
            echo $this->Form->control('cidade');
            echo $this->Form->control('estado');
            echo $this->Form->control('telefone');
            echo $this->Form->control('fax');
            echo $this->Form->control('celular');
            echo $this->Form->control('contato');
            echo $this->Form->control('endcob');
            echo $this->Form->control('bairrocob');
            echo $this->Form->control('cepcob');
            echo $this->Form->control('cidadecob');
            echo $this->Form->control('estadocob');
            echo $this->Form->control('obs');
            echo $this->Form->control('atividade');
            echo $this->Form->control('correspondencia');
            echo $this->Form->control('tributacao');
            echo $this->Form->control('comissao');
            echo $this->Form->control('vendedor');
            echo $this->Form->control('registro');
            echo $this->Form->control('deslocamento');
            echo $this->Form->control('ativo');
            echo $this->Form->control('multdistancia');
            echo $this->Form->control('multatividade');
            echo $this->Form->control('cadastrado_por');
            echo $this->Form->control('cadastrado_em');
            echo $this->Form->control('alterado_por');
            echo $this->Form->control('alterado_em');
            echo $this->Form->control('area');
            echo $this->Form->control('limite');
            echo $this->Form->control('ultimo_venc');
            echo $this->Form->control('atual_venc');
            echo $this->Form->control('prazo');
            echo $this->Form->control('tipo_fatura');
            echo $this->Form->control('datanasc');
            echo $this->Form->control('dia_fatuta');
            echo $this->Form->control('venc_cartao');
            echo $this->Form->control('cartao_proprio');
            echo $this->Form->control('senhacred');
            echo $this->Form->control('nrend1');
            echo $this->Form->control('nrend2');
            echo $this->Form->control('e_mail');
            echo $this->Form->control('cod_reg_trib');
            echo $this->Form->control('tipocad');
            echo $this->Form->control('st_liminar');
            echo $this->Form->control('complementar');
            echo $this->Form->control('tabela_preco');
            echo $this->Form->control('id_convenio');
            echo $this->Form->control('nr_convenio');
            echo $this->Form->control('cod_ctardz');
            echo $this->Form->control('dia_corte');
            echo $this->Form->control('dia_vencimento');
            echo $this->Form->control('protestar');
            echo $this->Form->control('dias_protestar');
            echo $this->Form->control('cpais');
            echo $this->Form->control('trilha1');
            echo $this->Form->control('trilha2');
            echo $this->Form->control('trilha3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
