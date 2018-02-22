<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colaborador $colaborador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $colaborador->cod_colaborador],
                ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->cod_colaborador)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Colaborador'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="colaborador form large-9 medium-8 columns content">
    <?= $this->Form->create($colaborador) ?>
    <fieldset>
        <legend><?= __('Edit Colaborador') ?></legend>
        <?php
            echo $this->Form->control('empresa');
            echo $this->Form->control('nome');
            echo $this->Form->control('funcao');
            echo $this->Form->control('comissao');
            echo $this->Form->control('telefone');
            echo $this->Form->control('cpf');
            echo $this->Form->control('rg');
            echo $this->Form->control('endereco');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cidade');
            echo $this->Form->control('uf');
            echo $this->Form->control('acesso');
            echo $this->Form->control('login');
            echo $this->Form->control('senha');
            echo $this->Form->control('ativo');
            echo $this->Form->control('cod_cadastro');
            echo $this->Form->control('conectado');
            echo $this->Form->control('local');
            echo $this->Form->control('acesso2');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
