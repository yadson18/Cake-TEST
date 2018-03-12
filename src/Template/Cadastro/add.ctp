<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro $cadastro
 */
?>
<div id='cadastro-add' class='col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1'>
    <?= $this->Form->create($cadastro, ['class' => 'form-content']) ?>
        <div class='form-header text-center'>
            <h4><?= __('Novo Cadastro') ?></h4>
        </div>
        <div class='form-body'>
            <div class='form-group' id='breadcrumb'>
                <ul class='nav nav-tabs tipo-cliente'>
                    <li class='active'>
                        <a class='fisica'><?= __('Pessoa Física') ?></a>
                    </li>
                    <li>
                        <a class='juridica'><?= __('Pessoa Jurídica') ?></a>
                    </li>
                </ul>
            </div>
            <div class='message-box'>
                <?= $this->Flash->render() ?>
            </div>
            <div class='form-group icon-right col-sm-6' id='cpf-cnpj'>
                <label><?= __('CPF') ?></label>  
                <?= $this->Form->control('cnpj', [
                        'placeholder' => 'EX: 095.726.241-80',
                        'class' => 'form-control input-sm cpf',
                        'autofocus' => true,
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
                <div id='busca-p-juridica' class='hidden'>
                    <i class='fas fa-search icon icon-sm col-icon button'></i>
                </div>
            </div>
            <div class='form-group col-sm-6' id='insc-estadual'>
                <label><?= __('N° Identidade') ?></label>        
                <?= $this->Form->control('estadual', [
                        'class' => 'form-control input-sm rg',
                        'placeholder' => 'EX: 9.557.033',
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-sm-6'>
                <label><?= __('Razão Social') ?></label>        
                <?= $this->Form->control('razao', [
                        'class' => 'form-control input-sm text-uppercase',
                        'placeholder' => 'EX: FRUTAS E VERDURAS QUITANDA',
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-sm-6'>      
                <?= $this->Form->control('fantasia', [
                        'class' => 'form-control input-sm text-uppercase',
                        'placeholder' => 'EX: FRUTAS E VERDURAS',
                        'required' => false,
                        'maxlength' => 40,
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-md-3 col-sm-4'>  
                <label><?= __('País') ?></label>    
                <?= $this->Form->control('cpais', [
                        'options' => array_column($paises, 'xpais', 'cpais'),
                        'class' => 'form-control input-sm',
                        'type' => 'select',
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-md-3 col-sm-5 icon-right'>  
                <label><?= __('CEP') ?></label>    
                <?= $this->Form->control('cep', [
                        'class' => 'form-control input-sm cep',
                        'placeholder' => 'EX: 50000-000',
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
                <i class='fas fa-search icon icon-sm col-icon button busca-endereco'></i>
            </div>
            <div class='form-group col-md-2 col-sm-3'>  
                <?= $this->Form->control('estado', [
                        'options' => array_column($estados, 'sigla', 'sigla'),
                        'class' => 'form-control input-sm',
                        'type' => 'select',
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-md-4 col-sm-5'>  
                <?= $this->Form->control('cidade', [
                        'options' => array_column(
                            $municipios, 'nome_municipio', 'nome_municipio'
                        ),
                        'class' => 'form-control input-sm',
                        'type' => 'select',
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-md-5 col-sm-7'> 
                <label><?= __('Endereço') ?></label>     
                <?= $this->Form->control('endereco', [
                        'class' => 'form-control input-sm text-uppercase',
                        'placeholder' => 'EX: RUA CARLOS AFONSO',
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-md-2 col-sm-4'>     
                <label><?= __('Número') ?></label> 
                <?= $this->Form->control('nrend1', [
                        'class' => 'form-control input-sm text-uppercase',
                        'placeholder' => 'EX: 225',
                        'required' => false,
                        'maxlength' => 12,
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-md-5 col-sm-8'>  
                <?= $this->Form->control('bairro', [
                        'class' => 'form-control input-sm text-uppercase',
                        'placeholder' => 'EX: CENTRO',
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-md-5 col-sm-6'> 
                <label><?= __('Complemento') ?></label> 
                <?= $this->Form->control('complementar', [
                        'class' => 'form-control input-sm text-uppercase',
                        'placeholder' => 'EX: EMPRESARIAL ROMA',
                        'required' => false,
                        'maxlength' => 40,
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
            </div>
            <div class='form-group col-md-7 col-sm-6'>  
                <label><?= __('Regime Tributário') ?></label>    
                <?= $this->Form->control('cod_reg_trib', [
                        'options' => [
                            1 => 'SIMPLES NACIONAL',
                            2 => 'SIMPLES NACIONAL - EXCESSO DE SUBLIMITE DA RECEITA BRUTA',
                            3 => 'REGIME NORMAL'
                        ],
                        'class' => 'form-control input-sm',
                        'type' => 'select',
                        'label' => false,
                        'error' => false
                    ]) 
                ?>
            </div>
        </div>
        <div class='form-footer'>
            <div class='col-sm-5'>
                <a href='/cadastro/index' class='btn btn-primary btn-block'>
                    <i class='fas fa-angle-double-left'></i> <?= __('Retornar') ?>
                </a>
            </div>
            <div class='col-sm-7'>
                <button class='btn btn-success btn-block'>
                    <?= __('Salvar') ?> <i class='fas fa-save'></i>
                </button>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>