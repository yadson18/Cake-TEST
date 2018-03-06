<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro $cadastro
 */
?>
<div id='cadastro-view' class='container-fluid'>
    <h2 class='page-header'>
        <?= __('Dados do Cliente') ?>
        <a href=/cadastro/edit/<?= $cadastro->cod_cadastro ?> class='btn btn-primary'>
            <?= __('Editar') ?> <i class='fas fa-pencil-alt'></i>
        </a>
        <button type='button' class='btn btn-danger'>
            <?= __('Excluir') ?> <i class='fas fa-trash-alt'></i>
        </button>
    </h2>
    <div class='form-group col-md-2 col-sm-3'>
        <div class='text-center user-div'>
            <i class='fas fa-user'></i>
        </div>
    </div>
    <fieldset class='form-group col-md-10 col-sm-9'>
        <legend>Dados Cadastrais</legend>
            <div class='col-md-5 col-sm-6'>
                <p><strong><?= __('Código') ?>:</strong> <?= h($cadastro->cod_cadastro) ?></p>
                <p><strong><?= __('Razão Social') ?>:</strong> <?= h($cadastro->razao) ?></p>
                <p><strong><?= __('Fantasia') ?>:</strong> <?= h($cadastro->fantasia) ?></p>
                <p>
                    <strong>
                        <?= __((strlen($cadastro->cnpj) === 11) ? 'CPF' : 'CNPJ') ?>:
                    </strong>
                    <?= h($cadastro->cnpj) ?>
                </p>
                <p>
                    <strong><?= __('Tipo') ?>:</strong> 
                    <?= ($cadastro->tipo === 'F') ? 'FORNECEDOR' : 'CLIENTE' ?>
                </p>
                <p>
                    <strong>
                        <?= (strlen($cadastro->cnpj) === 11) ? 'RG' : 'Inscrição Estadual' ?>:
                    </strong> 
                    <?= ($cadastro->estadual) ? h($cadastro->estadual) : 'NÃO INFORMADO' ?>
                </p>
                <?php if (strlen($cadastro->cnpj) === 14): ?>
                    <p>
                        <strong><?= __('Regime Tributário') ?>:</strong> 
                        <?php switch($cadastro->cod_reg_trib): case 1: ?>
                            SIMPLES NACIONAL
                        <?php break; case 2: ?>
                            SIMPLES NACIONAL - EXCESSO DE SUBLIMITE DA RECEITA BRUTA
                        <?php break; case 3: ?>
                            REGIME NORMAL
                        <?php break; endswitch; ?>
                    </p>
                <?php endif ?>
            </div>
            <div class='col-md-7 col-sm-6'>
                <?php if (strlen($cadastro->cnpj) === 14): ?>
                    <p>
                        <strong><?= __('CAE') ?>:</strong> 
                        <?= ($cadastro->cae) ? h($cadastro->cae) : 'NÃO INFORMADO' ?>
                    </p>
                <?php endif ?>
                <p>
                    <strong><?= __('Telefone') ?>:</strong> 
                    <?= ($cadastro->telefone) ? h($cadastro->telefone) : 'NÃO INFORMADO' ?>
                </p>
                <p>
                    <strong><?= __('Celular') ?>:</strong> 
                    <?= ($cadastro->celular) ? h($cadastro->celular) : 'NÃO INFORMADO' ?>
                </p>
                <p>
                    <strong><?= __('Fax') ?>:</strong> 
                    <?= ($cadastro->fax) ? h($cadastro->fax) : 'NÃO INFORMADO' ?>
                </p>
                <p>
                    <strong><?= __('Contato') ?>:</strong> 
                    <?= ($cadastro->contato) ? h($cadastro->contato) : 'NÃO INFORMADO' ?>
                </p>
                <p>
                    <strong><?= __('Data de Cadastro') ?>:</strong> 
                    <?= h( date('d/m/Y', strtotime($cadastro->cadastrado_em))) ?>
                </p>
                <p>
                    <strong><?= __('Última Alteração') ?>:</strong> 
                    <?= h( date('d/m/Y', strtotime($cadastro->alterado_em))) ?>
                </p>
        </div>
    </fieldset>
    <div class='row'>
        <div class='form-group col-sm-12'>
            <div class='panel-group' id='dados' role='tablist' aria-multiselectable='true'>
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='contratosHeader'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#dados' href='#contratos' aria-expanded='true' aria-controls='contratos'>
                                <i class='fas fa-angle-double-right'></i> Contratos
                            </a>
                        </h4>
                    </div>
                    <div id='contratos' class='panel-collapse collapse' role='tabpanel' aria-labelledby='contratosHeader'>
                        <div class='panel-body'>
                            Em Construção
                        </div>
                    </div>
                </div>
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='enderecoHeader'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#dados' href='#endereco' aria-expanded='true' aria-controls='endereco'>
                                <i class='fas fa-angle-double-right'></i> Endereço
                            </a>
                        </h4>
                    </div>
                    <div id='endereco' class='panel-collapse collapse' role='tabpanel' aria-labelledby='enderecoHeader'>
                        <div class='panel-body'>
                            <div class='list-group'>
                                <p class='list-group-item'>
                                    <strong><?= __('Estado') ?>:</strong> <?= h($cadastro->estado) ?>
                                </p>
                                <p class='list-group-item'>
                                    <strong><?= __('CEP') ?>:</strong> <?= h($cadastro->cep) ?>
                                </p>
                                <p class='list-group-item'>
                                    <strong><?= __('Cidade') ?>:</strong> <?= h($cadastro->cidade) ?>
                                </p>
                                <p class='list-group-item'>
                                    <strong><?= __('Endereço') ?>:</strong> <?= h($cadastro->endereco) ?>
                                </p>
                                <p class='list-group-item'>
                                    <strong><?= __('Número') ?>:</strong>
                                    <?= (strlen($cadastro->nrend1) === 0) ? 'S/N' : h($cadastro->nrend1) ?>
                                </p>
                                <p class='list-group-item'>
                                    <strong><?= __('Bairro') ?>:</strong> <?= h($cadastro->bairro) ?>
                                </p>
                                <?php if ($cadastro->complementar): ?>
                                    <p class='list-group-item'>
                                        <strong><?= __('Complemento') ?>:</strong> 
                                        <?= h($cadastro->complementar) ?>
                                    </p>
                                <?php endif ?>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class='panel panel-primary'>
                    <div class='panel-heading' role='tab' id='enderecoCobrancaHeader'>
                        <h4 class='panel-title'>
                            <a role='button' data-toggle='collapse' data-parent='#dados' href='#enderecoCob' aria-expanded='true' aria-controls='enderecoCob'>
                                <i class='fas fa-angle-double-right'></i> Endereço de Cobrança
                            </a>
                        </h4>
                    </div>
                    <div id='enderecoCob' class='panel-collapse collapse' role='tabpanel' aria-labelledby='enderecoCobrancaHeader'>
                        <div class='panel-body'>
                            <div class='list-group'>
                                <?php if (strlen($cadastro->cepcob) === 8): ?>
                                    <p class='list-group-item'>
                                        <strong><?= __('Estado') ?>:</strong> <?= h($cadastro->estadocob) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('CEP') ?>:</strong> <?= h($cadastro->cepcob) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('Cidade') ?>:</strong> <?= h($cadastro->cidadecob) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('Endereço') ?>:</strong> 
                                        <?= h($cadastro->enderecocob) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('Número') ?>:</strong>
                                        <?= (strlen($cadastro->nrend2) === 0) ? 'S/N' : h($cadastro->nrend2) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('Bairro') ?>:</strong> <?= h($cadastro->bairrocob) ?>
                                    </p>
                                <?php else: ?>
                                    <p class='list-group-item'>
                                        <strong><?= __('Estado') ?>:</strong> <?= h($cadastro->estado) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('CEP') ?>:</strong> <?= h($cadastro->cep) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('Cidade') ?>:</strong> <?= h($cadastro->cidade) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('Endereço') ?>:</strong> <?= h($cadastro->endereco) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('Número') ?>:</strong>
                                        <?= (strlen($cadastro->nrend1) === 0) ? 'S/N' : h($cadastro->nrend1) ?>
                                    </p>
                                    <p class='list-group-item'>
                                        <strong><?= __('Bairro') ?>:</strong> <?= h($cadastro->bairro) ?>
                                    </p>
                                    <?php if ($cadastro->complementar): ?>
                                        <p class='list-group-item'>
                                            <strong><?= __('Complemento') ?>:</strong> 
                                            <?= h($cadastro->complementar) ?>
                                        </p>
                                    <?php endif ?>
                                <?php endif ?>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
