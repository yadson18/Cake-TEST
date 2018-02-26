<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>

        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>SRI Administração - <?= $title ?></title>
        <?= $this->Html->meta('icon') ?>

        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat'>

        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('fontawesome-all.min.css') ?>
        <?= $this->Html->script('jquery.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>

        <link rel='stylesheet/less' type='text/css' href='/less/mixin.less'>
        <link rel='stylesheet/less' type='text/css' href='/less/styles.less'>
        <?= $this->Html->script('less.min.js') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <nav class='navbar navbar-inverse' id='main-nav'>
            <div class='container-fluid'>
                <div class='navbar-header'>
                    <?php if ($title !== 'Entrar'): ?>
                        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                        </button>
                    <?php endif ?>
                    <a href='#' class='navbar-brand'>SRI</a>
                </div>
                <?php if ($title !== 'Entrar'): ?>
                    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                        <ul class='nav navbar-nav'>
                            <li>
                                <a href='/cadastro/index'>
                                    <i class='fas fa-users'></i> Clientes
                                </a>
                            </li>
                            <li>
                                <a href='#'>
                                    <i class='fas fa-file-alt'></i> Cadastrar Contrato
                                </a>
                            </li>
                        </ul>
                        <ul class='nav navbar-nav navbar-right'>
                            <li class='dropdown'>
                                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                    <i class='fas fa-user'></i> 
                                    <?= $Auth->user('nome') ?> <span class='caret'></span>
                                </a>
                                <ul class='dropdown-menu'>
                                    <li><a href='#'><i class='fas fa-key'></i> Modificar Senha</a></li>
                                    <li><a href='#'><i class='fas fa-cogs'></i> Configurações</a></li>
                                    <li>
                                        <a href='/Colaborador/logout'>
                                            <i class='fas fa-sign-out-alt'></i> Sair
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
        </nav>
        <div class='container-fluid'>
            <?= $this->fetch('content') ?>
        </div>
    </body>
</html>
