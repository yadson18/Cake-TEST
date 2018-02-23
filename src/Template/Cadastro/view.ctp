<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro $cadastro
 */
?>
<div id='cadastro-view' class='container-fluid'>
    <h2 class='page-header'>
        <?= h('Dados do cliente') ?>
        <a href=/cadastro/edit/<?= $cadastro->cod_cadastro ?> class='btn btn-primary'>
            <?= __('Editar') ?> <i class='fas fa-pencil-alt'></i>
        </a>
        <button type='button' class='btn btn-danger'>
            <?= __('Excluir') ?> <i class='fas fa-trash-alt'></i>
        </button>
    </h2>
    <fieldset>
        <legend><?= __('Dados Cadastrais') ?></legend> 
        <div class='form-group col-sm-3'>
            <div class='text-center row user-div'>
                <i class='fas fa-user'></i>
            </div>
        </div>
        <div class='form-group col-sm-9'>
            <p>
                <strong><?= __('Código') ?>:</strong> <?= h($cadastro->cod_cadastro) ?>
            </p>
            <p>
                <strong><?= __('Razão Social') ?>:</strong> <?= h($cadastro->razao) ?>
            </p>
            <p>
                <strong><?= __('Fantasia') ?>:</strong> <?= h($cadastro->fantasia) ?>
            </p>
            <p>
                <strong><?= __('CNPJ/CPF') ?>:</strong> <?= h($cadastro->cnpj) ?>
            </p>
            <p>
                <strong><?= __('Tipo') ?>:</strong> <?= (h($cadastro->tipo) === 'F') ? 'FORNECEDOR' : 'CLIENTE' ?>
            </p>
            <p>
                <strong>
                    <?= (strlen(h($cadastro->cnpj)) === 11) ? 'N° Identidade' : 'Inscrição Estadual' ?>:
                </strong> 
                <?= h($cadastro->estadual) ?>
            </p>
            <p>
                <?php if (strlen(h($cadastro->cnpj)) === 14): ?>
                    <strong><?= __('CAE') ?>:</strong> <?= h($cadastro->cae) ?>
                <?php endif ?>
            </p>
            <p>
                <strong><?= __('Endereço') ?>:</strong>
                <?= h($cadastro->endereco) ?>,
                <?= (strlen(h($cadastro->nrend1)) === 0) ? 'S/N' : h($cadastro->nrend1) ?> -
                <?= h($cadastro->bairro) ?>
                <strong>/</strong>
                <?= h($cadastro->cidade) ?> - <?= h($cadastro->estado) ?>
            </p>
            <p>
                <strong><?= __('CEP') ?>:</strong> <?= h($cadastro->cep) ?>
            </p>
        </div>
    </fieldset>
    <div class='col-sm-12'>
        <fieldset>
            <legend><?= __('Dados Financeiros') ?></legend> 
            <p>
                <strong><?= __('Endereço de Cobrança') ?>:</strong> 
                <?php if ((strlen(h($cadastro->endcob)) !== 0)): ?>
                    <?= h($cadastro->endcob) ?>,
                    <?= (strlen(h($cadastro->nrend2)) === 0) ? 'S/N' : h($cadastro->nrend2) ?> <strong>/</strong>
                    <?= h($cadastro->cidadecob) ?> - <?= h($cadastro->estadocob) ?>
                <?php else: ?>
                    <?= __('NÃO INFORMADO') ?>
                <?php endif ?>
            </p>
        </fieldset>
    </div>
</div>
