<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colaborador $colaborador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Colaborador'), ['action' => 'edit', $colaborador->cod_colaborador]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Colaborador'), ['action' => 'delete', $colaborador->cod_colaborador], ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->cod_colaborador)]) ?> </li>
        <li><?= $this->Html->link(__('List Colaborador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Colaborador'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="colaborador view large-9 medium-8 columns content">
    <h3><?= h($colaborador->cod_colaborador) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($colaborador->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($colaborador->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($colaborador->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($colaborador->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($colaborador->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($colaborador->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($colaborador->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($colaborador->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acesso') ?></th>
            <td><?= h($colaborador->acesso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($colaborador->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($colaborador->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($colaborador->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conectado') ?></th>
            <td><?= h($colaborador->conectado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($colaborador->local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acesso2') ?></th>
            <td><?= h($colaborador->acesso2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($colaborador->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $this->Number->format($colaborador->empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Colaborador') ?></th>
            <td><?= $this->Number->format($colaborador->cod_colaborador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcao') ?></th>
            <td><?= $this->Number->format($colaborador->funcao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comissao') ?></th>
            <td><?= $this->Number->format($colaborador->comissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Cadastro') ?></th>
            <td><?= $this->Number->format($colaborador->cod_cadastro) ?></td>
        </tr>
    </table>
</div>
