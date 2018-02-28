<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conta->seq],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conta->seq)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contas form large-9 medium-8 columns content">
    <?= $this->Form->create($conta) ?>
    <fieldset>
        <legend><?= __('Edit Conta') ?></legend>
        <?php
            echo $this->Form->control('responsavel');
            echo $this->Form->control('data_emissao');
            echo $this->Form->control('data_venc');
            echo $this->Form->control('data_pagamento');
            echo $this->Form->control('descricao');
            echo $this->Form->control('valor');
            echo $this->Form->control('juros');
            echo $this->Form->control('multa');
            echo $this->Form->control('desconto');
            echo $this->Form->control('integral');
            echo $this->Form->control('documento');
            echo $this->Form->control('cfop');
            echo $this->Form->control('tipo_movimento');
            echo $this->Form->control('cancelado');
            echo $this->Form->control('plano_conta');
            echo $this->Form->control('tipo_cobranca');
            echo $this->Form->control('empresa');
            echo $this->Form->control('forma_pagamento');
            echo $this->Form->control('comissao');
            echo $this->Form->control('valor_pago');
            echo $this->Form->control('data_comissao');
            echo $this->Form->control('total_pagar');
            echo $this->Form->control('cadastrado_por');
            echo $this->Form->control('cadastrado_em');
            echo $this->Form->control('alterado_por');
            echo $this->Form->control('alterado_em');
            echo $this->Form->control('tipo_conta');
            echo $this->Form->control('cod_colaborador');
            echo $this->Form->control('sintetico');
            echo $this->Form->control('analitico');
            echo $this->Form->control('centro_custo');
            echo $this->Form->control('seq_banco');
            echo $this->Form->control('nr_cheque');
            echo $this->Form->control('cod_finalizadora');
            echo $this->Form->control('caixa');
            echo $this->Form->control('nosso_numero');
            echo $this->Form->control('lote_remessa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
