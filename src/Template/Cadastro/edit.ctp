<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro $cadastro
 */
?>
<div id='cadastro-edit' class='col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1'>
    <?php if(!empty($cadastro)): ?>
        <?= $this->Form->create($cadastro, ['class' => 'form-content']) ?>
            <div class='form-header text-center'>
                <h4><?= __('Modificar Cliente') ?></h4>
            </div>
            <div class='form-body'>
                <div class='form-group' id='breadcrumb'>
                    <ul class='nav nav-tabs tipo-cliente'>
                        <li class=<?= (strlen($cadastro->cnpj) === 11) ? 'active' : '' ?>>
                            <a href='#' id='CPF'><?= __('Pessoa Física') ?></a>
                        </li>
                        <li class=<?= (strlen($cadastro->cnpj) === 14) ? 'active' : '' ?>>
                            <a href='#' id='CNPJ'><?= __('Pessoa Jurídica') ?></a>
                        </li>
                    </ul>
                </div>
                <div class='message-box'>
                    <?= $this->Flash->render() ?>
                </div>
                <div class='form-group icon-right col-sm-6'>
                    <label>
                        <?= (strlen($cadastro->cnpj) === 14) ? __('CNPJ') : __('CPF') ?>
                    </label>        
                    <?= $this->Form->control('cnpj', [
                            'placeholder' => (strlen($cadastro->cnpj) === 14) 
                                ? 'EX: 53.965.649/0001-03' : 'EX: 095.726.241-80',
                            'class' => 'form-control input-sm',
                            'label' => false
                        ]) 
                    ?>
                    <i class='fas fa-search icon icon-sm col-icon button'></i>
                </div>
                <div class='form-group col-sm-6'>
                    <label>
                        <?= (strlen($cadastro->cnpj) === 14) ? __('Inscrição Estadual') : __('RG') ?>
                    </label>        
                    <?= $this->Form->control('estadual', [
                            'placeholder' => (strlen($cadastro->cnpj) === 14) 
                                ? 'EX: ISENTO' : 'EX: 9.557.033',
                            'class' => 'form-control input-sm text-uppercase',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-6'>
                    <label><?= __('Razão Social') ?></label>        
                    <?= $this->Form->control('razao', [
                            'class' => 'form-control input-sm text-uppercase',
                            'placeholder' => 'EX: FRUTAS E VERDURAS QUITANDA',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-sm-6'>      
                    <?= $this->Form->control('fantasia', [
                            'class' => 'form-control input-sm text-uppercase',
                            'placeholder' => 'EX: FRUTAS E VERDURAS',
                            'required' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-md-3 col-sm-4'>  
                    <label><?= __('País') ?></label>    
                    <?= $this->Form->control('cpais', [
                            'options' => array_column($paises, 'xpais', 'cpais'),
                            'class' => 'form-control input-sm',
                            'type' => 'select',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-md-3 col-sm-5 icon-right'>  
                    <label><?= __('CEP') ?></label>    
                    <?= $this->Form->control('cep', [
                            'class' => 'form-control input-sm',
                            'placeholder' => 'EX: 50000-000',
                            'label' => false
                        ]) 
                    ?>
                    <i class='fas fa-search icon icon-sm col-icon button busca-endereco'></i>
                </div>
                <div class='form-group col-md-2 col-sm-3'>  
                    <?= $this->Form->control('estado', [
                            'options' => array_column($estados, 'sigla', 'sigla'),
                            'class' => 'form-control input-sm',
                            'type' => 'select'
                        ]) 
                    ?>
                </div>
                <div class='form-group col-md-4 col-sm-5'>  
                    <?= $this->Form->control('cidade', [
                            'options' => array_column(
                                $municipios, 'nome_municipio', 'nome_municipio'
                            ),
                            'class' => 'form-control input-sm',
                            'type' => 'select'
                        ]) 
                    ?>
                </div>
                <div class='form-group col-md-5 col-sm-7'> 
                    <label><?= __('Endereço') ?></label>     
                    <?= $this->Form->control('endereco', [
                            'class' => 'form-control input-sm text-uppercase',
                            'placeholder' => 'EX: RUA CARLOS AFONSO',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-md-2 col-sm-4'>     
                    <label><?= __('Número') ?></label> 
                    <?= $this->Form->control('nrend1', [
                            'class' => 'form-control input-sm text-uppercase',
                            'placeholder' => 'EX: 225',
                            'type' => 'number',
                            'label' => false
                        ]) 
                    ?>
                </div>
                <div class='form-group col-md-5 col-sm-8'>  
                    <?= $this->Form->control('bairro', [
                            'class' => 'form-control input-sm text-uppercase',
                            'placeholder' => 'EX: CENTRO'
                        ]) 
                    ?>
                </div>
                <div class='form-group col-md-5 col-sm-6'> 
                    <label><?= __('Complemento') ?></label> 
                    <?= $this->Form->control('complementar', [
                            'class' => 'form-control input-sm text-uppercase',
                            'placeholder' => 'EX: EMPRESARIAL ROMA',
                            'required' => false,
                            'label' => false
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
                            'label' => false
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
    <?php endif; ?>
</div>