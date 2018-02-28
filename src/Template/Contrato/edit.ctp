<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contrato->seq],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->seq)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contrato'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contrato form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Edit Contrato') ?></legend>
        <?php
            echo $this->Form->control('data_vencimento');
            echo $this->Form->control('contratante');
            echo $this->Form->control('data_inclusao');
            echo $this->Form->control('data_ativacao');
            echo $this->Form->control('valor_contrato');
            echo $this->Form->control('data_ultima_cobranca');
            echo $this->Form->control('data_ultima_renovacao');
            echo $this->Form->control('obs');
            echo $this->Form->control('modalidade');
            echo $this->Form->control('razao_social');
            echo $this->Form->control('fantasia');
            echo $this->Form->control('dia_vencimento');
            echo $this->Form->control('status');
            echo $this->Form->control('seq_banco');
            echo $this->Form->control('master');
            echo $this->Form->control('analitico');
            echo $this->Form->control('sintetico');
            echo $this->Form->control('cod_resp_financeiro');
            echo $this->Form->control('valor_comissao');
            echo $this->Form->control('sintegra');
            echo $this->Form->control('efd');
            echo $this->Form->control('nota_fiscal_eletronica');
            echo $this->Form->control('num_termi_adm');
            echo $this->Form->control('hardware');
            echo $this->Form->control('cod_vendedor');
            echo $this->Form->control('data_cancelamento');
            echo $this->Form->control('cancelado');
            echo $this->Form->control('tipo_envio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
